package com.wk.guestpass.app.Fragments;

import android.app.Activity;
import android.app.DatePickerDialog;
import android.app.Dialog;
import android.app.ProgressDialog;
import android.app.TimePickerDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.database.Cursor;
import android.graphics.Bitmap;
import android.graphics.Color;
import android.graphics.Point;
import android.graphics.Typeface;
import android.graphics.drawable.BitmapDrawable;
import android.net.Uri;
import android.os.Build;
import android.os.Bundle;
import android.os.Handler;
import com.crashlytics.android.Crashlytics;
import io.fabric.sdk.android.Fabric;
import android.provider.ContactsContract;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.support.design.widget.BottomSheetDialog;
import android.support.v4.app.ActivityCompat;
import android.support.v4.app.Fragment;
import android.support.v4.content.FileProvider;
import android.support.v7.app.AlertDialog;
import android.util.Log;
import android.view.Display;
import android.view.Gravity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.view.Window;
import android.view.WindowManager;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.ProgressBar;
import android.widget.RelativeLayout;
import android.widget.TextView;
import android.widget.TimePicker;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.wk.guestpass.app.R;
import com.wk.guestpass.app.Utilities.Config;
import com.wk.guestpass.app.Utilities.SessionManager;
import com.github.ybq.android.spinkit.style.CubeGrid;
import com.google.zxing.WriterException;

import org.json.JSONException;
import org.json.JSONObject;

import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.util.Calendar;
import java.util.HashMap;
import java.util.Map;

import androidmads.library.qrgenearator.QRGContents;
import androidmads.library.qrgenearator.QRGEncoder;
import cn.pedant.SweetAlert.SweetAlertDialog;
import pl.droidsonroids.gif.GifImageView;

import static android.Manifest.permission.ACCESS_FINE_LOCATION;
import static android.Manifest.permission.READ_CONTACTS;
import static android.Manifest.permission.READ_EXTERNAL_STORAGE;
import static android.Manifest.permission.WRITE_CONTACTS;
import static android.Manifest.permission.WRITE_EXTERNAL_STORAGE;
import static android.content.Context.WINDOW_SERVICE;
import static com.wk.guestpass.app.Fragments.TodaysGuest.TAG;

public class AddGuest extends Fragment {

    private LinearLayout knowngust, unknwnguest;
    private EditText mobno, datess, timess, name, addrs, vpurpose;
    private ImageView search, plus, minus, back,addcontct;
    private TextView countguest,knwguest,unknwguest,shareQr;
    final int PICK_CONTACT = 001;
    private int count = 1;
    private Button invite;
    private static final int PERMISSION_REQUEST_CODE = 200;
    String number, guestrole="1",usersssid,adminids,flatids;
    private BottomSheetDialog bottomSheetDialog;
    private SessionManager sessionManager;
    StringRequest stringRequest,stringRequest1;
    RequestQueue mRequestQueue,mRequestQueue1;
    public GifImageView gifImageView;
    public CubeGrid cubeGrid;
    String format, codes;
    private ProgressBar progressBar;
    public RelativeLayout mainscreen,bgrnd;

    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        Fabric.with(getActivity(), new Crashlytics());
        View view = inflater.inflate(R.layout.fragaddguest, container, false);
        sessionManager=new SessionManager(getActivity());
       // addcontct = view.findViewById(R.id.contact);
        mobno = view.findViewById(R.id.mobile);
        back = view.findViewById(R.id.back);
        search = view.findViewById(R.id.searchs);
        knowngust = view.findViewById(R.id.known);
        unknwnguest = view.findViewById(R.id.unknown);
        knwguest = view.findViewById(R.id.kntext);
        unknwguest = view.findViewById(R.id.unknwtxt);
        plus = view.findViewById(R.id.plus);
        minus = view.findViewById(R.id.minus);
        countguest = view.findViewById(R.id.totalguest);
        datess = view.findViewById(R.id.dates);
        timess = view.findViewById(R.id.time);
        name = view.findViewById(R.id.name);
        addrs = view.findViewById(R.id.address);
        vpurpose = view.findViewById(R.id.vstpurpose);
        invite = view.findViewById(R.id.invite);

        HashMap<String, String> users = sessionManager.getUserDetails();
        usersssid = users.get(SessionManager.KEY_ID);
        adminids = users.get(SessionManager.KEY_AdminID);
        flatids = users.get(SessionManager.KEY_FlatID);

        requestPermission();
        ClickFolder();

        back.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                getFragmentManager().popBackStack();
            }
        });

        return view;

    }

    public void checkguest(final String mobile) {

        final ProgressDialog showMe = new ProgressDialog(getActivity());
        showMe.setMessage("Please wait");
        showMe.setCancelable(true);
        showMe.setCanceledOnTouchOutside(false);
        showMe.show();

        String url = Config.guestcheck;
        mRequestQueue1 = Volley.newRequestQueue(getActivity());

        stringRequest1 = new StringRequest(Request.Method.POST, url,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        showMe.dismiss();
                        JSONObject j = null;
                        try {
                            j = new JSONObject(response);

                            String status = j.getString("status");
                            if (status.equals("1")) {
                                String role=j.getString("guest role");
                                if(role.equals("1")){
                                  //  knwguest.setCompoundDrawablesWithIntrinsicBounds(R.drawable.ic_thumbup,0,0,0);
                                    knwguest.setTextColor(Color.parseColor("#0d7cd1"));
                                    knwguest.setTypeface(Typeface.defaultFromStyle(Typeface.BOLD));
                                  //  unknwguest.setCompoundDrawablesWithIntrinsicBounds(R.drawable.ic_thumbdown,0,0,0);
                                    unknwguest.setTextColor(Color.parseColor("#8b8b8b"));
                                    unknwguest.setTypeface(Typeface.DEFAULT);
                                    guestrole="1";
                                }
                                else if(role.equals("2")){
                                 //   knwguest.setCompoundDrawablesWithIntrinsicBounds(R.drawable.ic_thumbdown,0,0,0);
                                    knwguest.setTextColor(Color.parseColor("#8b8b8b"));
                                    knwguest.setTypeface(Typeface.DEFAULT);
                                 //   unknwguest.setCompoundDrawablesWithIntrinsicBounds(R.drawable.ic_thumbup,0,0,0);
                                    unknwguest.setTextColor(Color.parseColor("#0d7cd1"));
                                    unknwguest.setTypeface(Typeface.defaultFromStyle(Typeface.BOLD));
                                    guestrole="2";
                                }
                                name.setText(""+j.getString("guest name"));
                                addrs.setText(""+j.getString("guest address"));
                                vpurpose.setText(""+j.getString("guest_purpose"));

                                final SweetAlertDialog sw = new SweetAlertDialog(getActivity(), SweetAlertDialog.SUCCESS_TYPE);
                                sw.setTitleText("Data Found");
                                sw.setContentText("You Have Already Visited Before!");
                                sw.show();
                                new Handler().postDelayed(new Runnable() {
                                    public void run() {
                                        sw.dismissWithAnimation();
                                    }
                                }, 2000);

                            }
                            else {
                                //Toasty.info(getActivity(), ""+j.getString("messege"), Toast.LENGTH_SHORT, true).show();
                                final SweetAlertDialog ew=new SweetAlertDialog(getActivity(), SweetAlertDialog.ERROR_TYPE);
                                ew.setTitleText("OOPS! No Data Found");
                                ew.setContentText("You Can Add Newone!!!!");
                                ew.show();
                                new Handler().postDelayed(new Runnable() {
                                    public void run() {
                                        ew.dismissWithAnimation();
                                    }
                                }, 2000);
                            }
                        } catch (JSONException e) {
                            Log.e("TAG", "Something Went Wrong");
                        }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        showMe.dismiss();
                        // Toasty.error(getActivity(), "Network Error.", Toast.LENGTH_SHORT, true).show();
                        NetworkDialog();
                    }
                }) {
            @Override
            public Map<String, String> getHeaders() throws AuthFailureError {
                Map<String, String> headers = new HashMap<String, String>();
                headers.put("apikey", "d29985af97d29a80e40cd81016d939af");
                return headers;
            }

            @Override
            public Map<String, String> getParams() throws AuthFailureError {
                Map<String, String> params = new HashMap<String, String>();
               // params.put("user_id", "25");
                params.put("user_id", usersssid);
                params.put("mobile", mobile);
                return params;
            }
        };
        stringRequest1.setTag(TAG);
        mRequestQueue1.add(stringRequest1);
    }

    public void AddGuest(final String mobile, final String ttlguest, final String guestrole, final String date,
                         final String time, final String name, final String addres, final String purpose) {

        final ProgressDialog showMe = new ProgressDialog(getActivity());
        showMe.setMessage("Please wait");
        showMe.setCancelable(true);
        showMe.setCanceledOnTouchOutside(false);
        showMe.show();

        String url = Config.addguest;
        mRequestQueue = Volley.newRequestQueue(getActivity());

        stringRequest = new StringRequest(Request.Method.POST, url,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        showMe.dismiss();
                        JSONObject j = null;
                        try {
                            j = new JSONObject(response);

                            String status = j.getString("status");
                            if (status.equals("1")) {
                                String respnse = j.getString("response");
                                QrcodeDialog(""+respnse,mobile);
                            }
                        } catch (JSONException e) {
                            Log.e("TAG", "Something Went Wrong");
                        }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        showMe.dismiss();
                        // Toasty.error(getActivity(), "Network Error.", Toast.LENGTH_SHORT, true).show();
                        NetworkDialog();
                    }
                }) {
            @Override
            public Map<String, String> getHeaders() throws AuthFailureError {
                Map<String, String> headers = new HashMap<String, String>();
                headers.put("apikey", "d29985af97d29a80e40cd81016d939af");
                return headers;
            }

            @Override
            public Map<String, String> getParams() throws AuthFailureError {
                Map<String, String> params = new HashMap<String, String>();
               // params.put("user_id", "25");
                params.put("user_id", usersssid);
                params.put("admin_id", adminids);
                params.put("flat_id", flatids);
               // params.put("admin_id", "6");
              //  params.put("flat_id", "7");
                params.put("mobile", mobile);
                params.put("guest_role", guestrole);
                params.put("total_guest", ttlguest);
                params.put("date", date);
                params.put("time", time);
                params.put("name", name);
                params.put("address", addres);
                params.put("purpose", purpose);

                return params;
            }
        };
        stringRequest.setTag(TAG);
        mRequestQueue.add(stringRequest);
    }


    private void ClickFolder() {

        invite.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(mobno.getText().toString().equals("")){
                    Toast toast = Toast.makeText(getActivity(), "Enter Mobile Number First!!!", Toast.LENGTH_SHORT);
                    toast.setGravity(Gravity.CENTER, 0, 0);
                    toast.show();
                }
                else if(datess.getText().toString().equals("")){
                    Toast toast = Toast.makeText(getActivity(), "Date Is Missing!!", Toast.LENGTH_SHORT);
                    toast.setGravity(Gravity.CENTER, 0, 0);
                    toast.show();
                }
                else if(timess.getText().toString().equals("")){
                    Toast toast = Toast.makeText(getActivity(), "Time Is Important!!", Toast.LENGTH_SHORT);
                    toast.setGravity(Gravity.CENTER, 0, 0);
                    toast.show();
                }
                else if(name.getText().toString().equals("")){
                    Toast toast = Toast.makeText(getActivity(), "Name Is Remaining!!", Toast.LENGTH_SHORT);
                    toast.setGravity(Gravity.CENTER, 0, 0);
                    toast.show();
                }
                else if(addrs.getText().toString().equals("")){
                    Toast toast = Toast.makeText(getActivity(), "Can't Find You Without Address!!", Toast.LENGTH_SHORT);
                    toast.setGravity(Gravity.CENTER, 0, 0);
                    toast.show();
                }
                else if(vpurpose.getText().toString().equals("")){
                    Toast toast = Toast.makeText(getActivity(), "Visit Purpose Is Must Important!!", Toast.LENGTH_SHORT);
                    toast.setGravity(Gravity.CENTER, 0, 0);
                    toast.show();
                }
                else {
                    AddGuest(mobno.getText().toString().trim(), String.valueOf(count),guestrole,datess.getText().toString(), timess.getText().toString(),name.getText().toString(),addrs.getText().toString(),vpurpose.getText().toString());
                }
            }
        });

       /* addcontct.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(Intent.ACTION_PICK, ContactsContract.Contacts.CONTENT_URI);
                startActivityForResult(intent, PICK_CONTACT);
            }
        });*/

        knowngust.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
              //  knwguest.setCompoundDrawablesWithIntrinsicBounds(R.drawable.ic_thumbup,0,0,0);
                knwguest.setTextColor(Color.parseColor("#0d7cd1"));
                knwguest.setTypeface(Typeface.defaultFromStyle(Typeface.BOLD));
                knwguest.setTextSize(15);
              //  unknwguest.setCompoundDrawablesWithIntrinsicBounds(R.drawable.ic_thumbdown,0,0,0);
                unknwguest.setTextColor(Color.parseColor("#8b8b8b"));
                unknwguest.setTypeface(Typeface.DEFAULT);
                unknwguest.setTextSize(13);
                guestrole="1";
            }
        });
        unknwnguest.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
              //  knwguest.setCompoundDrawablesWithIntrinsicBounds(R.drawable.ic_thumbdown,0,0,0);
                knwguest.setTextColor(Color.parseColor("#8b8b8b"));
                knwguest.setTypeface(Typeface.DEFAULT);
                knwguest.setTextSize(13);
              //  unknwguest.setCompoundDrawablesWithIntrinsicBounds(R.drawable.ic_thumbup,0,0,0);
                unknwguest.setTextColor(Color.parseColor("#0d7cd1"));
                unknwguest.setTypeface(Typeface.defaultFromStyle(Typeface.BOLD));
                unknwguest.setTextSize(15);
                guestrole="2";
            }
        });

        search.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(mobno.getText().toString().equals("")){
                    Toast toast = Toast.makeText(getActivity(), "Enter Mobile Number First!!!", Toast.LENGTH_SHORT);
                    toast.setGravity(Gravity.CENTER, 0, 0);
                    toast.show();
                }
                else{

                    checkguest(mobno.getText().toString());
                }
            }
        });

        minus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (count > 1) {
                    count = count - 1;
                    countguest.setText("" + count);
                }
            }
        });

        plus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                count = count + 1;
                countguest.setText("" + count);
            }
        });

        datess.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Calendar mcurrentDate = Calendar.getInstance();
                final int[] mYear = {mcurrentDate.get(Calendar.YEAR)};
                final int[] mMonth = {mcurrentDate.get(Calendar.MONTH)};
                final int[] mDay = {mcurrentDate.get(Calendar.DAY_OF_MONTH)};

                DatePickerDialog mDatePicker = new DatePickerDialog(getActivity(), new DatePickerDialog.OnDateSetListener() {
                    public void onDateSet(DatePicker datepicker, int selectedyear, int selectedmonth, int selectedday) {
                        // TODO Auto-generated method stub
                        mYear[0] = selectedyear;
                        mMonth[0] = selectedmonth;
                        mDay[0] = selectedday;
                        datess.setText(new StringBuilder().append(mDay[0]).append("-").append(mMonth[0] + 1).append("-").append(mYear[0]).append("")); }
                    //  datess.setText(new StringBuilder().append(mYear[0]).append("-").append(mMonth[0] + 1).append("-").append(mDay[0]).append("")); }

                }, mYear[0], mMonth[0], mDay[0]);
                mDatePicker.setTitle("Select Date");
                mDatePicker.show();
                mDatePicker.getDatePicker().setMinDate(System.currentTimeMillis());
            }
        });

        timess.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                final Calendar c = Calendar.getInstance();
                final int mHour = c.get(Calendar.HOUR_OF_DAY);
                final int mMinute = c.get(Calendar.MINUTE);
                final int mAMPM=c.get(Calendar.AM_PM);

                TimePickerDialog timePickerDialog = new TimePickerDialog(getActivity(),
                        new TimePickerDialog.OnTimeSetListener() {

                            @Override
                            public void onTimeSet(TimePicker view, int hourOfDay,
                                                  int minute) {
                                if (hourOfDay == 0) {
                                    hourOfDay += 12;
                                    format = "AM";
                                }
                                else if (hourOfDay == 12) {
                                    format = "PM";
                                }
                                else if (hourOfDay > 12) {
                                    hourOfDay -= 12;
                                    format = "PM";
                                }
                                else {
                                    format = "AM";
                                }
                                timess.setText(hourOfDay + ":" +minute +" "+format);
                            }
                        }, mHour, mMinute, false);
                timePickerDialog.show();
            }
        });


    }


    private void shareImageUri(Uri uri){
        Intent intent = new Intent(android.content.Intent.ACTION_SEND);
        intent.putExtra(Intent.EXTRA_STREAM, uri);
        intent.putExtra(Intent.EXTRA_TEXT,"This Is your Guestpass Qr code, kindly save it to get access in property, And your code is: "+codes);
        intent.addFlags(Intent.FLAG_GRANT_READ_URI_PERMISSION);
        intent.setType("image/*");
        startActivity(Intent.createChooser(intent, "Share QRCode!"));
    }

    private Uri saveImage(Bitmap image, String code) {
        //TODO - Should be processed in another thread
        File imagesFolder = new File(getActivity().getCacheDir(), "images");
        Uri uri = null;
        try {
            imagesFolder.mkdirs();
            File file = new File(imagesFolder, code+"_image.png");

            FileOutputStream stream = new FileOutputStream(file);
            image.compress(Bitmap.CompressFormat.PNG, 90, stream);
            stream.flush();
            stream.close();

            if ((Build.VERSION.SDK_INT > Build.VERSION_CODES.KITKAT)) {
                uri = FileProvider.getUriForFile(getActivity(),
                        "com.example.abc.newguard", file);
            }
            else {
                uri=Uri.fromFile(file);
            }

        } catch (IOException e) {
            Log.d(TAG, "IOException while trying to write file for sharing: "+e.getMessage());
        }
        return uri;
    }

    private void NetworkDialog(){
        final Dialog dialogs  = new Dialog(getActivity());
        dialogs.requestWindowFeature(Window.FEATURE_NO_TITLE);
        dialogs.setContentView(R.layout.networkdialog);
        dialogs.setCanceledOnTouchOutside(false);
        Button done=(Button)dialogs.findViewById(R.id.done);
        done.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                dialogs.dismiss();
                checkguest(mobno.getText().toString());
                ClickFolder();
            }
        });
        dialogs.show();
    }

    private void QrcodeDialog(final String code, final String mobile){
        bottomSheetDialog = new BottomSheetDialog(getActivity());
        bottomSheetDialog.setContentView(R.layout.qr_code);
        bottomSheetDialog.setCanceledOnTouchOutside(false);
        bottomSheetDialog.setCancelable(false);


        final ImageView qrview,qrbck;
        TextView sharebtn,txtcode,sendsms;
        qrview=bottomSheetDialog.findViewById(R.id.qrcodeicon);
        txtcode=bottomSheetDialog.findViewById(R.id.codetxt);
        shareQr=bottomSheetDialog.findViewById(R.id.Share);
        qrbck=bottomSheetDialog.findViewById(R.id.qrback);

        WindowManager manager = (WindowManager)getActivity().getSystemService(WINDOW_SERVICE);
        Display display = manager.getDefaultDisplay();
        Point point = new Point();
        display.getSize(point);
        int width = point.x;
        int height = point.y;
        int smallerDimension = width < height ? width : height;
        smallerDimension = smallerDimension * 2 / 4;

        qrbck.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bottomSheetDialog.dismiss();
                Intent intent = getActivity().getIntent();
                intent.addFlags(Intent.FLAG_ACTIVITY_NO_ANIMATION);
                getActivity().finish();
                startActivity(intent);
                //   getFragmentManager().popBackStack();
                // mn.HomedataList();
            }
        });

        QRGEncoder qrgEncoder = new QRGEncoder(code, null, QRGContents.Type.TEXT, smallerDimension);
        try {
            Bitmap bitmap = qrgEncoder.encodeAsBitmap();
            qrview.setImageBitmap(bitmap);
            txtcode.setText(""+code);
            codes = code;
        } catch (WriterException e) {
            Log.v(TAG, e.toString());
        }

        shareQr.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                qrview.invalidate();
                Bitmap bitmap = ((BitmapDrawable) qrview.getDrawable()).getBitmap();
                shareImageUri(saveImage(bitmap,code));
            }
        });

        bottomSheetDialog.show();
    }

    private void requestPermission() {
        ActivityCompat.requestPermissions(getActivity(), new String[]
                {READ_CONTACTS, WRITE_CONTACTS,READ_EXTERNAL_STORAGE,WRITE_EXTERNAL_STORAGE}, PERMISSION_REQUEST_CODE);
    }

    @Override
    public void onRequestPermissionsResult(int requestCode, @NonNull String[] permissions, @NonNull int[] grantResults) {
        switch (requestCode) {
            case PERMISSION_REQUEST_CODE:
                if (grantResults.length > 0) {

                    if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.M) {
                        if (shouldShowRequestPermissionRationale(ACCESS_FINE_LOCATION)) {
                            showMessageOKCancel("You need to allow access to both the permissions",
                                    new DialogInterface.OnClickListener() {
                                        @Override
                                        public void onClick(DialogInterface dialog, int which) {
                                            if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.M) {
                                                requestPermissions(new String[]{READ_CONTACTS, WRITE_CONTACTS,READ_EXTERNAL_STORAGE,WRITE_EXTERNAL_STORAGE},
                                                        PERMISSION_REQUEST_CODE);
                                            }
                                        }
                                    });
                            return;
                        }
                    }

                }
                break;
        }
    }

    private void showMessageOKCancel(String message, DialogInterface.OnClickListener okListener) {
        new AlertDialog.Builder(getActivity())
                .setMessage(message)
                .setPositiveButton("OK", okListener)
                .setNegativeButton("Cancel", null)
                .create()
                .show();
    }

    @Override
    public void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);

        switch (requestCode) {
            case (PICK_CONTACT):
                if (resultCode == Activity.RESULT_OK) {
                    Uri contactData = data.getData();
                    Cursor c = getActivity().getContentResolver().query(contactData, null, null, null, null);
                    if (c.moveToFirst()) {

                        String contactId = c.getString(c.getColumnIndex(ContactsContract.Contacts._ID));
                        String hasNumber = c.getString(c.getColumnIndex(ContactsContract.Contacts.HAS_PHONE_NUMBER));

                        if (Integer.valueOf(hasNumber) == 1) {
                            Cursor numbers = getActivity().getContentResolver().
                                    query(ContactsContract.CommonDataKinds.Phone.CONTENT_URI, null, ContactsContract.CommonDataKinds.Phone.CONTACT_ID + " = " + contactId, null, null);
                            while (numbers.moveToNext()) {
                                number = numbers.getString(numbers.getColumnIndex(ContactsContract.CommonDataKinds.Phone.NUMBER));
                                mobno.setText("" + number);
                            }
                        }
                    }
                }
                break;
        }
    }

    @Override
    public void onStop() {
        super.onStop();
        if (mRequestQueue != null) {
            mRequestQueue.cancelAll(TAG);
        }else if (mRequestQueue1 != null) {
            mRequestQueue1.cancelAll(TAG);
        }
    }
}
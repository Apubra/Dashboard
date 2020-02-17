package com.wk.guestpass.guard;

import android.app.Dialog;
import android.app.ProgressDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.graphics.Canvas;
import android.graphics.Color;
import android.graphics.drawable.BitmapDrawable;
import android.graphics.drawable.ColorDrawable;
import android.graphics.drawable.Drawable;
import android.net.Uri;
import android.os.Build;
import android.os.Environment;
import android.provider.MediaStore;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.support.design.widget.BottomSheetDialog;
import android.support.v4.app.ActivityCompat;
import android.support.v4.content.FileProvider;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Base64;
import android.util.Log;
import android.view.Gravity;
import android.view.View;
import android.view.Window;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.RelativeLayout;
import android.widget.TextView;
import android.widget.Toast;
import com.android.volley.AuthFailureError;
import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.crashlytics.android.Crashlytics;
import com.mikhaellopez.circularimageview.CircularImageView;

import io.fabric.sdk.android.Fabric;
import org.json.JSONException;
import org.json.JSONObject;
import java.io.ByteArrayOutputStream;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.HashMap;
import java.util.Map;
import id.zelory.compressor.Compressor;
import static android.Manifest.permission.ACCESS_FINE_LOCATION;
import static android.Manifest.permission.CAMERA;
import static android.Manifest.permission.READ_EXTERNAL_STORAGE;
import static android.Manifest.permission.WRITE_EXTERNAL_STORAGE;

public class MainActivity extends AppCompatActivity {
    private LinearLayout scanqr, entermanually,checkins;
    private BottomSheetDialog bottomSheetDialog;
    private LinearLayout layout;
    private TextView gname, frmgest, dates, settime, contct, guestcnt, vstpurpse, intime,  guestroletag;
    private ImageView expstamp, signout, vsitphoto, cancel;
    RelativeLayout  vistdoc;
    private Dialog dialog;
    private TextView guardname, ttlvisit, apart;
    private SessionManager session;
    private String usersssid;
    public static final String TAG = "MyTag";
    StringRequest stringRequest, stringRequest1;
    RequestQueue mRequestQueue, mRequestQueue1;
    public Bitmap phtobitmap, phtobitmap1;
    private int REQUEST_CAMERA = 786;
    private int Document = 18, count = 0;
    private File actualImage, compressedImage;
    private String mCurrentPhotoPath;
    CircularImageView doc, pic;
    private static final int PERMISSION_REQUEST_CODE = 200;
    private static final int REQUEST_CONNECT_DEVICE = 1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Fabric.with(this, new Crashlytics());
        setContentView(R.layout.activity_main);

        session = new SessionManager(getApplicationContext());
        scanqr = (LinearLayout) findViewById(R.id.scanqr);
        entermanually = (LinearLayout) findViewById(R.id.manualcode);
        signout = findViewById(R.id.logout);
        guardname = findViewById(R.id.guardname);
        apart = findViewById(R.id.aprtname);
        ttlvisit = findViewById(R.id.tgcount);
        requestPermission();
        HashMap<String, String> users = session.getUserDetails();
        usersssid = users.get(SessionManager.KEY_ID);

        scanqr.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getApplicationContext(), QRActivity.class);
                startActivityForResult(intent, 101);
            }
        });
        entermanually.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Codedialog();
            }
        });

        dashboard();

        signout.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                android.app.AlertDialog.Builder builder = new android.app.AlertDialog.Builder(MainActivity.this, R.style.MyDialogTheme);
                builder.setMessage("Are you sure you want to Logout");
                builder.setPositiveButton("Yes", new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface dialog, int id) {
                        session.logoutUser();
                        dialog.dismiss();
                        finish();
                    }
                });
                builder.setNegativeButton("No", new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface dialog, int id) {
                        dialog.dismiss();
                    }
                });
                android.app.AlertDialog alertDialog = builder.create();
                alertDialog.show();
            }
        });

        dashboard();
    }

    private void Codedialog() {

        dialog = new Dialog(MainActivity.this);
        dialog.requestWindowFeature(Window.FEATURE_NO_TITLE);
        dialog.setContentView(R.layout.codedailog);
        dialog.getWindow().setBackgroundDrawable(new ColorDrawable(Color.TRANSPARENT));
        dialog.setCanceledOnTouchOutside(false);
        dialog.setCancelable(true);
        final EditText codes;
        Button submit;
        ImageView delete;
        submit = dialog.findViewById(R.id.submit);
        codes = dialog.findViewById(R.id.code);
        delete = dialog.findViewById(R.id.deleteicon);

        delete.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                dialog.dismiss();
            }
        });

        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (codes.getText().toString().equals("")) {
                    Toast.makeText(MainActivity.this, "Please Enter Correct Code!!", Toast.LENGTH_SHORT).show();
                } else {
                    TodaysdataList(codes.getText().toString());
                    dialog.dismiss();
                }
            }
        });
        dialog.show();
    }

    private void requestPermission() {
        ActivityCompat.requestPermissions(this, new String[]
                {CAMERA, WRITE_EXTERNAL_STORAGE, READ_EXTERNAL_STORAGE}, PERMISSION_REQUEST_CODE);
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
                                                requestPermissions(new String[]{CAMERA, READ_EXTERNAL_STORAGE, WRITE_EXTERNAL_STORAGE},
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
        new AlertDialog.Builder(MainActivity.this)
                .setMessage(message)
                .setPositiveButton("OK", okListener)
                .setNegativeButton("Cancel", null)
                .create()
                .show();
    }


    public void TodaysdataList(final String respcode) {

        final ProgressDialog showMe = new ProgressDialog(MainActivity.this);
        showMe.setMessage("Please wait");
        showMe.setCancelable(false);
        showMe.setCanceledOnTouchOutside(false);
        showMe.show();

        String url = Config.checkcode;
        mRequestQueue = Volley.newRequestQueue(getApplicationContext());

        stringRequest = new StringRequest(Request.Method.POST, url,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        showMe.dismiss();
                        JSONObject j = null;
                        try {
                            j = new JSONObject(response);

                            String status = j.getString("status");
                            if (status.equals("0")) {
                                Toast toast = Toast.makeText(getApplicationContext(),
                                        "" + j.getString("messege"), Toast.LENGTH_LONG);
                                toast.setGravity(Gravity.CENTER, 0, 0);
                                toast.show();
                            } else if (status.equals("1")) {
                                bottomsheetdialog(j.getString("guest_id"), j.getString("guest_name"), j.getString("flat_user") + " (" + j.getString("flat_name") + ")", j.getString("guest_date"), j.getString("time"),
                                        j.getString("guest_mobile"), j.getString("total_guest"), j.getString("purpose"), j.getString("guest_role"), j.getString("flat_user_mob"));

                            } else if (status.equals("2")) {
                                Toast toast = Toast.makeText(getApplicationContext(),
                                        "" + j.getString("messege"), Toast.LENGTH_LONG);
                                toast.setGravity(Gravity.CENTER, 0, 0);
                                toast.show();
                            } else if (status.equals("3")) {
                                Toast toast = Toast.makeText(getApplicationContext(),
                                        "" + j.getString("messege"), Toast.LENGTH_LONG);
                                toast.setGravity(Gravity.CENTER, 0, 0);
                                toast.show();
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
                        Toast toast = Toast.makeText(getApplicationContext(), "Network Error", Toast.LENGTH_SHORT);
                        toast.setGravity(Gravity.CENTER, 0, 0);
                        toast.show();
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
                params.put("guard_id", usersssid);
                params.put("response_code", respcode);
                return params;
            }
        };
        stringRequest.setTag(TAG);
        mRequestQueue.add(stringRequest);
    }

    public void dashboard() {

        String url = Config.dashboard;
        mRequestQueue1 = Volley.newRequestQueue(getApplicationContext());

        stringRequest1 = new StringRequest(Request.Method.POST, url,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        JSONObject j = null;
                        try {
                            j = new JSONObject(response);

                            String status = j.getString("status");
                            if (status.equals("1")) {
                                guardname.setText(j.getString("guard_name"));
                                String total =  j.getString("total_visitors");
                                ttlvisit.setText("Total Guest : "+total);
                                apart.setText(j.getString("apartment"));
                            }
                        } catch (JSONException e) {
                            Log.e("TAG", "Something Went Wrong");
                        }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Toast toast = Toast.makeText(getApplicationContext(), "Network Error", Toast.LENGTH_SHORT);
                        toast.setGravity(Gravity.CENTER, 0, 0);
                        toast.show();
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
                params.put("guard_id", usersssid);
                return params;
            }
        };
        stringRequest1.setTag(TAG);
        mRequestQueue1.add(stringRequest1);
    }

    public void checkindata(final String guestid, final String ttlguest) {

        final ProgressDialog showMe = new ProgressDialog(MainActivity.this);
        showMe.setMessage("Please wait");
        showMe.setCancelable(false);
        showMe.setCanceledOnTouchOutside(false);
        showMe.show();

        String url = Config.checkin;
        mRequestQueue1 = Volley.newRequestQueue(getApplicationContext());

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
                                Toast toast = Toast.makeText(getApplicationContext(),
                                        "SuccessFully CheckedIn", Toast.LENGTH_LONG);
                                toast.setGravity(Gravity.CENTER, 0, 0);
                                toast.show();
                                bottomSheetDialog.dismiss();
                                dashboard();
                            } else if (status.equals("0")) {
                                Toast toast = Toast.makeText(getApplicationContext(),
                                        "" + j.getString("messege"), Toast.LENGTH_LONG);
                                toast.setGravity(Gravity.CENTER, 0, 0);
                                toast.show();
                            } else {
                                Toast toast = Toast.makeText(getApplicationContext(),
                                        "" + j.getString("messege"), Toast.LENGTH_LONG);
                                toast.setGravity(Gravity.CENTER, 0, 0);
                                toast.show();
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
                        bottomSheetDialog.dismiss();
                        Toast toast = Toast.makeText(getApplicationContext(), "Network Error", Toast.LENGTH_SHORT);
                        toast.setGravity(Gravity.CENTER, 0, 0);
                        toast.show();
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
                params.put("guard_id", usersssid);
                params.put("guest_id", guestid);
                params.put("checkin_guests", ttlguest);
                if (phtobitmap == null) {
                    params.put("image", "0");
                }
                if (phtobitmap1 == null) {
                    params.put("docimage", "0");
                } else {
                    params.put("image", getStringImage(phtobitmap));
                    params.put("docimage", getStringImage(phtobitmap1));
                }
                return params;
            }
        };
        stringRequest1.setTag(TAG);
        mRequestQueue1.add(stringRequest1);
        stringRequest1.setRetryPolicy(new DefaultRetryPolicy(0,
                DefaultRetryPolicy.DEFAULT_MAX_RETRIES,DefaultRetryPolicy.DEFAULT_BACKOFF_MULT));
    }

    private void bottomsheetdialog(final String guestid, String guestname, String guestfrom, String gdate, String gtime, String gcontact,
                                   final String gtotl, String gpurpose, String grole, final String callnumb) {

        View view = getLayoutInflater().inflate(R.layout.popuplayout1, null);

        bottomSheetDialog = new BottomSheetDialog(MainActivity.this);
        bottomSheetDialog.setContentView(view);
        bottomSheetDialog.setCanceledOnTouchOutside(false);

        pic = bottomSheetDialog.findViewById(R.id.cv1);
        doc = bottomSheetDialog.findViewById(R.id.doc);

        layout =bottomSheetDialog.findViewById(R.id.layout2);
        gname = bottomSheetDialog.findViewById(R.id.gname);
        frmgest = bottomSheetDialog.findViewById(R.id.frmguest);
        dates = bottomSheetDialog.findViewById(R.id.dates);
        settime = bottomSheetDialog.findViewById(R.id.settime);
        contct = bottomSheetDialog.findViewById(R.id.contct);
        intime = bottomSheetDialog.findViewById(R.id.intime);
        guestcnt = bottomSheetDialog.findViewById(R.id.totalguest);
        vstpurpse = bottomSheetDialog.findViewById(R.id.vistprpose);
        guestroletag = bottomSheetDialog.findViewById(R.id.kwngesttag);
        checkins = (LinearLayout) bottomSheetDialog.findViewById(R.id.checkinprint);
        expstamp = bottomSheetDialog.findViewById(R.id.expstamp);
        vsitphoto = bottomSheetDialog.findViewById(R.id.visitphoto);
        vistdoc = bottomSheetDialog.findViewById(R.id.adddoc);
        view = bottomSheetDialog.findViewById(R.id.views);
        cancel = bottomSheetDialog.findViewById(R.id.cancel);

        Date d=new Date();
        SimpleDateFormat sdf=new SimpleDateFormat("hh:mm a");
        String currentDateTimeString = sdf.format(d);
        intime.setText(currentDateTimeString);

        phtobitmap = null;
        phtobitmap1 = null;
        gname.setText(guestname.substring(0, 1).toUpperCase() + "" + guestname.substring(1));
        frmgest.setText(guestfrom.substring(0, 1).toUpperCase() + "" + guestfrom.substring(1));
        dates.setText(gdate);
        settime.setText(gtime);
        contct.setText(gcontact.replaceAll("\\d(?=\\d{4})", "*"));
        guestcnt.setText(gtotl);
        vstpurpse.setText(gpurpose);

        if (grole.equals("1")) {
            guestroletag.setText("KNOWN GUEST");
        } else {
            guestroletag.setText("UNKNOWN GUEST");
            view.setVisibility(View.VISIBLE);
            layout.setVisibility(View.VISIBLE);
        }

        count = Integer.parseInt(gtotl);

        vsitphoto.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MediaStore.ACTION_IMAGE_CAPTURE);
                try {
                    actualImage = createImageFile();
                } catch (IOException e) {
                    e.printStackTrace();
                    actualImage = null;
                    mCurrentPhotoPath = null;
                }
                if (actualImage != null) {
                    Uri photoURI = null;
                    if ((Build.VERSION.SDK_INT > Build.VERSION_CODES.KITKAT)) {
                        photoURI = FileProvider.getUriForFile(MainActivity.this,
                                "com.example.abc.newguradkeeper", actualImage);
                    } else {
                        photoURI = Uri.fromFile(actualImage);
                    }
                    intent.putExtra(MediaStore.EXTRA_OUTPUT, photoURI);
                    startActivityForResult(intent, REQUEST_CAMERA);
                }
            }
        });

        vistdoc.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MediaStore.ACTION_IMAGE_CAPTURE);
                try {
                    actualImage = createImageFile();
                } catch (IOException e) {
                    e.printStackTrace();
                    actualImage = null;
                    mCurrentPhotoPath = null;
                }
                if (actualImage != null) {
                    Uri photoURI = null;
                    if ((Build.VERSION.SDK_INT > Build.VERSION_CODES.KITKAT)) {
                        photoURI = FileProvider.getUriForFile(MainActivity.this,
                                "com.example.abc.newguradkeeper", actualImage);
                    } else {
                        photoURI = Uri.fromFile(actualImage);
                    }
                    intent.putExtra(MediaStore.EXTRA_OUTPUT, photoURI);
                    startActivityForResult(intent, Document);
                }
            }
        });

        cancel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                bottomSheetDialog.dismiss();
            }
        });

        checkins.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                checkindata(guestid, String.valueOf(count));
                bottomSheetDialog.dismiss();
            }
        });

        bottomSheetDialog.show();
    }

    public static Bitmap drawableToBitmap(Drawable drawable) {
        Bitmap bitmap = null;

        if (drawable instanceof BitmapDrawable) {
            BitmapDrawable bitmapDrawable = (BitmapDrawable) drawable;
            if (bitmapDrawable.getBitmap() != null) {
                return bitmapDrawable.getBitmap();
            }
        }

        if (drawable.getIntrinsicWidth() <= 0 || drawable.getIntrinsicHeight() <= 0) {
            bitmap = Bitmap.createBitmap(1, 1, Bitmap.Config.ARGB_8888); // Single color bitmap will be created of 1x1 pixel
        } else {
            bitmap = Bitmap.createBitmap(drawable.getIntrinsicWidth(), drawable.getIntrinsicHeight(), Bitmap.Config.ARGB_8888);
        }

        Canvas canvas = new Canvas(bitmap);
        drawable.setBounds(0, 0, canvas.getWidth(), canvas.getHeight());
        drawable.draw(canvas);
        return bitmap;
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, @Nullable Intent data) {
        super.onActivityResult(requestCode, resultCode, data);
        if (requestCode == 101) {
            if (data != null) {
                String respcode = data.getStringExtra("RESPCODE");
                TodaysdataList(respcode);
            }
        }
        if (resultCode == RESULT_OK) {
            // for document
            if (requestCode == Document) {
                customdocCompressImage();
            }
            // for profile image
            else if (requestCode == REQUEST_CAMERA) {
                customphotoCompressImage();
            }
        }
    }

    private File createImageFile() throws IOException {
        File mediaStorageDir = new File(Environment.getExternalStoragePublicDirectory(
                Environment.DIRECTORY_DCIM), "Camera");
        if (!mediaStorageDir.exists()) {
            mediaStorageDir.mkdir();
        }
        String timeStamp = new SimpleDateFormat("yyyyMMdd_HHmmss").format(new Date());
        String imageFileName = "IMG_" + timeStamp + ".jpg";
        File image = new File(mediaStorageDir, imageFileName);
        mCurrentPhotoPath = image.getAbsolutePath();
        return image;
    }

    public void customphotoCompressImage() {
        if (actualImage == null) {
        } else {
            try {
                compressedImage = new Compressor(this)
                        .setMaxWidth(540)
                        .setMaxHeight(500)
                        .setQuality(95)
                        .setCompressFormat(Bitmap.CompressFormat.WEBP)
                        .compressToFile(actualImage);
                setphtoCompressedImage();

            } catch (IOException e) {
                e.printStackTrace();
            }

        }
    }

    public void customdocCompressImage() {
        if (actualImage == null) {
        } else {
            try {
                compressedImage = new Compressor(this)
                        .setMaxWidth(540)
                        .setMaxHeight(500)
                        .setQuality(95)
                        .setCompressFormat(Bitmap.CompressFormat.JPEG)
                        .compressToFile(actualImage);

                setdocCompressedImage();

            } catch (IOException e) {
                e.printStackTrace();
            }

        }
    }

    public void setphtoCompressedImage() {
        phtobitmap = BitmapFactory.decodeFile(compressedImage.getAbsolutePath());
        FileOutputStream outputStream = null;
        try {
            outputStream = new FileOutputStream(actualImage);
            phtobitmap.compress(Bitmap.CompressFormat.JPEG, 100, outputStream);
            pic.setImageBitmap(phtobitmap);
        } catch (FileNotFoundException e) {
            e.printStackTrace();
        }
    }

    public void setdocCompressedImage() {
        phtobitmap1 = BitmapFactory.decodeFile(compressedImage.getAbsolutePath());
        FileOutputStream outputStream = null;
        try {
            outputStream = new FileOutputStream(actualImage);
            phtobitmap1.compress(Bitmap.CompressFormat.JPEG, 100, outputStream);
            doc.setImageBitmap(phtobitmap1);
        } catch (FileNotFoundException e) {
            e.printStackTrace();
        }
    }

    public String getStringImage(Bitmap bmp) {
        ByteArrayOutputStream baos = new ByteArrayOutputStream();
        bmp.compress(Bitmap.CompressFormat.JPEG, 90, baos);
        byte[] imageBytes = baos.toByteArray();
        String encodedImage = Base64.encodeToString(imageBytes, Base64.DEFAULT);
        return encodedImage;
    }

    @Override
    public void onStop() {
        super.onStop();
        if (mRequestQueue != null) {
            mRequestQueue.cancelAll(TAG);
        } else if (mRequestQueue1 != null) {
            mRequestQueue1.cancelAll(TAG);
        }
    }

}

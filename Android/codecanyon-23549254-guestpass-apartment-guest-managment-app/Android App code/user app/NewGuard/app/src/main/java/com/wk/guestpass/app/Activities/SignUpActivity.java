package com.wk.guestpass.app.Activities;

import android.app.Dialog;
import android.app.ProgressDialog;
import android.content.Intent;
import android.graphics.drawable.Drawable;
import android.os.Build;
import android.os.Handler;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.Gravity;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.RelativeLayout;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;
import com.crashlytics.android.Crashlytics;
import io.fabric.sdk.android.Fabric;
import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.wk.guestpass.app.R;
import com.wk.guestpass.app.Utilities.Config;
import com.wk.guestpass.app.Fragments.TodaysGuest;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;

import cn.pedant.SweetAlert.SweetAlertDialog;

public class SignUpActivity extends AppCompatActivity {

    private Button signup;
    private TextView login , aprtmentname;
    private Spinner mySpinner;
    private ArrayList<String> flats = new ArrayList<String>();
    private ArrayList<String> flatids = new ArrayList<String>();
    private EditText refcode, name, email, number, pin, cpin;
    private RelativeLayout check;
    private CheckBox accept;
    LinearLayout show;
    String  guestrole="1",usersssid,adminids;
    StringRequest stringRequest,stringRequest1;
    RequestQueue mRequestQueue,mRequestQueue1;
    String spin_val1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Fabric.with(this, new Crashlytics());
        setContentView(R.layout.activity_sign_up);

       /* if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.KITKAT) {
            Window w = getWindow();
            w.addFlags(WindowManager.LayoutParams.FLAG_LAYOUT_NO_LIMITS);
           // w.addFlags(WindowManager.LayoutParams.FLAG_TRANSLUCENT_NAVIGATION);
        }*/

        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.LOLLIPOP) {
            Window window = getWindow();
            Drawable background = getResources().getDrawable(R.drawable.gradd1);
            window.addFlags(WindowManager.LayoutParams.FLAG_DRAWS_SYSTEM_BAR_BACKGROUNDS);
            window.setStatusBarColor(getResources().getColor(android.R.color.transparent));
            window.setNavigationBarColor(getResources().getColor(android.R.color.transparent));
            window.setBackgroundDrawable(background);
        }
        login = (TextView)findViewById(R.id.login);
        aprtmentname = (TextView)findViewById(R.id.aprtname);
        signup = (Button)findViewById(R.id.signup);
        name = (EditText)findViewById(R.id.name);
        email = (EditText)findViewById(R.id.email);
        number = (EditText)findViewById(R.id.number);
        pin = (EditText)findViewById(R.id.pin);
        cpin = (EditText)findViewById(R.id.cpin);
        refcode = (EditText)findViewById(R.id.refcode);
        check = (RelativeLayout)findViewById(R.id.check);
        accept = (CheckBox)findViewById(R.id.tc);
        show = (LinearLayout)findViewById(R.id.show);

        mySpinner = (Spinner)findViewById(R.id.flatname);


        login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent i = new Intent(SignUpActivity.this, LoginActivity.class);
                startActivity(i);
            }
        });

        check.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                String rfc = refcode.getText().toString();
                checkrefcode(rfc);
            }
        });

        flats.add("Select Flats");
        flatids.add("0");
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(SignUpActivity.this, android.R.layout.simple_list_item_1, flats);
        adapter.setDropDownViewResource(android.R.layout.simple_list_item_single_choice);
        mySpinner.setAdapter(adapter);

        mySpinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
                if(!flats.get(position).equals("Select Flats")){
                    spin_val1 = flatids.get(position);
                }
            }
            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }
        });

        signup.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                ClickFolder();

            }
        });
    }


    public void ClickFolder (){

        if (mySpinner.getSelectedItem().toString().equals("Select Flats")){

            Toast toast = Toast.makeText(SignUpActivity.this, "Select Flat First!!!", Toast.LENGTH_SHORT);
            toast.setGravity(Gravity.CENTER, 0, 0);
            toast.show();
        }
        else if(name.getText().toString().equals("")){
            Toast toast = Toast.makeText(SignUpActivity.this, "Enter Name First!!!", Toast.LENGTH_SHORT);
            toast.setGravity(Gravity.CENTER, 0, 0);
            toast.show();
        }
        else if(email.getText().toString().equals("")){
            Toast toast = Toast.makeText(SignUpActivity.this, "Enter Email First!!!!", Toast.LENGTH_SHORT);
            toast.setGravity(Gravity.CENTER, 0, 0);
            toast.show();
        }
        else if(number.getText().toString().equals("")){
            Toast toast = Toast.makeText(SignUpActivity.this, "Enter Mobile Number First!!!", Toast.LENGTH_SHORT);
            toast.setGravity(Gravity.CENTER, 0, 0);
            toast.show();
        }
        else if(number.getText().toString().length()<9){
            Toast toast = Toast.makeText(SignUpActivity.this, "Enter Valid Mobile Number First!!!", Toast.LENGTH_SHORT);
            toast.setGravity(Gravity.CENTER, 0, 0);
            toast.show();
        }
        else if(pin.getText().toString().equals("")){
            Toast toast = Toast.makeText(SignUpActivity.this, "Enter Pin First!!!", Toast.LENGTH_SHORT);
            toast.setGravity(Gravity.CENTER, 0, 0);
            toast.show();
        }
        else if(cpin.getText().toString().equals("")){
            Toast toast = Toast.makeText(SignUpActivity.this, "Enter Confirm Pin First!!!", Toast.LENGTH_SHORT);
            toast.setGravity(Gravity.CENTER, 0, 0);
            toast.show();
        }
        else if(!pin.getText().toString().equals(cpin.getText().toString())){
            Toast toast = Toast.makeText(SignUpActivity.this, "Pins are not Matching!!!", Toast.LENGTH_SHORT);
            toast.setGravity(Gravity.CENTER, 0, 0);
            toast.show();

        }else if(!accept.isChecked()){

            Toast toast = Toast.makeText(SignUpActivity.this, "Please Accept Terms & Conditions!!!", Toast.LENGTH_SHORT);
            toast.setGravity(Gravity.CENTER, 0, 0);
            toast.show();
        }
        else
        {
            SignUps();
        }
    }

    public void checkrefcode(final String refcodess) {

        final ProgressDialog showMe = new ProgressDialog(SignUpActivity.this);
        showMe.setMessage("Please wait");
        showMe.setCancelable(true);
        showMe.setCanceledOnTouchOutside(false);
        showMe.show();

        String url = Config.refcodes;
        mRequestQueue1 = Volley.newRequestQueue(getApplicationContext());

        stringRequest1 = new StringRequest(Request.Method.POST, url,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        flats.clear();
                        flatids.clear();
                        flats.add("Select Flats");
                        flatids.add("0");
                        showMe.dismiss();
                        JSONObject j = null;
                        try {
                            j = new JSONObject(response);

                            String status = j.getString("status");
                            if (status.equals("1")) {

                                aprtmentname.setText(""+j.getString("appartment"));
                                adminids = j.getString("admin_id");

                                JSONArray applist = j.getJSONArray("SAI APPARTMENT");
                                if (applist != null && applist.length() > 0) {
                                    for (int i = 0; i < applist.length(); i++) {
                                        JSONObject getOne = applist.getJSONObject(i);
                                        flats.add(getOne.getString("flat_name"));
                                        flatids.add(getOne.getString("flat_id"));
                                    }

                                    ArrayAdapter<String> adapter = new ArrayAdapter<String>(SignUpActivity.this, android.R.layout.simple_list_item_1, flats);
                                    adapter.setDropDownViewResource(android.R.layout.simple_list_item_single_choice);
                                    mySpinner.setAdapter(adapter);
                                }
                                show.setVisibility(View.VISIBLE);

                                final SweetAlertDialog sw = new SweetAlertDialog(SignUpActivity.this, SweetAlertDialog.SUCCESS_TYPE);
                                sw.setTitleText("Data Found");
                                sw.show();
                                new Handler().postDelayed(new Runnable() {
                                    public void run() {
                                        sw.dismissWithAnimation();
                                    }
                                }, 2000);
                            }
                            else {
                                final SweetAlertDialog ew=new SweetAlertDialog(SignUpActivity.this, SweetAlertDialog.ERROR_TYPE);
                                ew.setTitleText("Invalid Reference Code");
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
                params.put("ref_code", refcodess);
                return params;
            }
        };
        stringRequest1.setTag(TodaysGuest.TAG);
        mRequestQueue1.add(stringRequest1);
    }

    public void SignUps() {

        final String refcodess= refcode.getText().toString();
        final String username = name.getText().toString();
        final String emails = email.getText().toString();
        final String numbers = number.getText().toString();
        final String pass = pin.getText().toString();
        final String cpass = cpin.getText().toString();

        final ProgressDialog showMe = new ProgressDialog(SignUpActivity.this);
        showMe.setMessage("Please wait");
        showMe.setCancelable(true);
        showMe.setCanceledOnTouchOutside(false);
        showMe.show();

        String url = Config.signup;
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
                            if (status.equals("1")) {

                                Toast toast = Toast.makeText(getApplicationContext(), "Sign Up Successfull You can Login Now!!!", Toast.LENGTH_SHORT);
                                toast.setGravity(Gravity.CENTER, 0, 0);
                                toast.show();
                                finish();

                            }
                            else {
                                String failed = j.getString("message");
                                Toast.makeText(SignUpActivity.this, failed, Toast.LENGTH_SHORT).show();
                            }
                        } catch (JSONException e) {
                            Log.e("TAG", "Something Went Wrong");
                            Toast.makeText(SignUpActivity.this, "Something Went Wrong", Toast.LENGTH_SHORT).show();
                        }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        showMe.dismiss();
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
            protected Map<String, String> getParams() throws AuthFailureError {
                Map<String, String> params = new HashMap<String, String>();
                params.put("admin_id", adminids);
                params.put("ref_code", refcodess);
                params.put("flat_id", spin_val1);
                params.put("name", username);
                params.put("email", emails);
                params.put("mobile", numbers);
                params.put("pin",pass);
                params.put("conf_pin",cpass);

                return params;
            }
        };
        stringRequest.setTag(TodaysGuest.TAG);
        mRequestQueue.add(stringRequest);
    }

    private void NetworkDialog(){
        final Dialog dialogs  = new Dialog(SignUpActivity.this);
        dialogs.requestWindowFeature(Window.FEATURE_NO_TITLE);
        dialogs.setContentView(R.layout.networkdialog);
        dialogs.setCanceledOnTouchOutside(false);
        Button done=(Button)dialogs.findViewById(R.id.done);
        done.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                dialogs.dismiss();

            }
        });
        dialogs.show();
    }
}

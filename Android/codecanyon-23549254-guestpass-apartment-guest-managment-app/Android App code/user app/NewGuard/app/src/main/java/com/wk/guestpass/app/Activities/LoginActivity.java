package com.wk.guestpass.app.Activities;

import android.content.Intent;
import android.graphics.drawable.Drawable;
import android.os.Build;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Gravity;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.RelativeLayout;
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
import com.wk.guestpass.app.Utilities.SessionManager;
import com.github.ybq.android.spinkit.style.CubeGrid;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

import pl.droidsonroids.gif.GifImageView;

public class LoginActivity extends AppCompatActivity {

    EditText number,pins;
    Button login;
    private TextView loginbtn, signup;
    StringRequest stringRequest;
    private String user1;
    private String passd;
    public String  userid;
    public String adminid,flatid;
    public String Mobile;
    public String propcodes,username, flatnos, aprtmnt;
    SessionManager sessionManager;
    public GifImageView gifImageView;
    public CubeGrid cubeGrid;
    public RelativeLayout mainscreen,bgrnd;
    private ProgressBar progressBar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Fabric.with(this, new Crashlytics());
        setContentView(R.layout.activity_login);
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
            //window.setNavigationBarColor(getResources().getColor(android.R.color.transparent));
            window.setBackgroundDrawable(background);
        }

        sessionManager=new SessionManager(getApplicationContext());

        loginbtn=(TextView)findViewById(R.id.loginbtn);
        number=(EditText)findViewById(R.id.mobile);
        pins=(EditText)findViewById(R.id.pins);

        signup=(TextView) findViewById(R.id.signup);

        progressBar = (ProgressBar) findViewById(R.id.progress);
        mainscreen=(RelativeLayout)findViewById(R.id.overmain);
        bgrnd=(RelativeLayout)findViewById(R.id.bgrnd);

        loginbtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                loginuser();

            }
        });

        cubeGrid = new CubeGrid();
        cubeGrid.setColor(getResources().getColor(R.color.colorPrimary));
        cubeGrid.start();
        progressBar.setIndeterminateDrawable(cubeGrid);

        if(sessionManager.isLoggedIn()==true){
            Intent intent = new Intent(LoginActivity.this, MainActivity.class);
            startActivity(intent);
            finish();
        }

        signup.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent i = new Intent(LoginActivity.this, SignUpActivity.class);
                startActivity(i);
            }
        });

    }

    public void loginuser() {
        user1 = number.getText().toString();
        passd = pins.getText().toString();
        if (user1.equals("")) {
            Toast toast=Toast.makeText(this, "Please Enter Mobile No.", Toast.LENGTH_SHORT);
            toast.setGravity(Gravity.CENTER,0,0);
            toast.show();
            return;
        } else if (passd.equals("")) {
            Toast toast=Toast.makeText(this, "Please Enter Password", Toast.LENGTH_SHORT);
            toast.setGravity(Gravity.CENTER,0,0);
            toast.show();
            return;
        } else {
            mainscreen.setVisibility(View.VISIBLE);
          /*  final ProgressDialog showMe = new ProgressDialog(this);
            showMe.setMessage("Please wait");
            showMe.setCancelable(true);
            showMe.show();*/
            String url= Config.login;
            stringRequest = new StringRequest(Request.Method.POST, url,
                    new Response.Listener<String>() {
                        @Override
                        public void onResponse(String response) {
                            //showMe.dismiss();
                            mainscreen.setVisibility(View.GONE);
                            JSONObject json = null;
                            try {
                                json = new JSONObject(response);

                                String success = json.getString("status");
                                if (success.equals("1")) {

                                    userid = json.getString("user_id");
                                    adminid=json.getString("admin_id");
                                    flatid=json.getString("flat_id");
                                    Mobile=json.getString("Mobile no");
                                    propcodes = json.getString("prop_code");
                                    username=json.getString("Name");
                                    flatnos=json.getString("flat_name");
                                    aprtmnt=json.getString("appartment");
                                    sessionManager.createLoginSession(userid,adminid,flatid,Mobile,propcodes,username,flatnos, aprtmnt);
                                    Intent intent=new Intent(getApplicationContext(),MainActivity.class);
                                    startActivity(intent);
                                    finish();

                                }
                                else {
                                    String failed = json.getString("message");
                                    Toast.makeText(LoginActivity.this, failed, Toast.LENGTH_SHORT).show();
                                }
                            } catch (JSONException e) {
                                e.printStackTrace();
                            }
                        }
                    },
                    new Response.ErrorListener() {
                        @Override
                        public void onErrorResponse(VolleyError error) {
                            //showMe.dismiss();
                            mainscreen.setVisibility(View.GONE);
                            Toast toast=Toast.makeText(getApplicationContext(),"Network Error",Toast.LENGTH_SHORT);
                            toast.setGravity(Gravity.CENTER,0,0);
                            toast.show();
                        }
                    }){
                @Override
                public Map<String, String> getHeaders() throws AuthFailureError {
                    Map<String, String> headers = new HashMap<String, String>();
                    headers.put("apikey","d29985af97d29a80e40cd81016d939af");
                    return headers;
                }
                @Override
                public Map<String, String> getParams() throws AuthFailureError {
                    Map<String, String> params = new HashMap<String, String>();
                    params.put("mobile",user1);
                    params.put("pin",passd);
                    return params;
                }
            };

            RequestQueue requestQueue = Volley.newRequestQueue(this);
            requestQueue.add(stringRequest);
        }
    }

    @Override
    protected void onStop() {
        cubeGrid.stop();
        super.onStop();
    }
}

package com.wk.guestpass.guard;

import android.content.Intent;
import android.graphics.drawable.Drawable;
import android.os.Build;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.Gravity;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
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
import com.github.ybq.android.spinkit.style.CubeGrid;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;



public class LoginActivity extends AppCompatActivity {

    EditText number,pins;
    private TextView loginbtn;
    StringRequest stringRequest;
    private String user1;
    private String passd;
    public String  userid;
    public String name;
    public String Mobile;
    SessionManager sessionManager;

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
            w.addFlags(WindowManager.LayoutParams.FLAG_TRANSLUCENT_NAVIGATION);
        }*/
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.LOLLIPOP) {
            Window window = getWindow();
            Drawable background = getResources().getDrawable(R.drawable.gradd1);
            window.addFlags(WindowManager.LayoutParams.FLAG_DRAWS_SYSTEM_BAR_BACKGROUNDS);
            window.setStatusBarColor(getResources().getColor(android.R.color.transparent));
          //  window.setNavigationBarColor(getResources().getColor(android.R.color.transparent));
            window.setBackgroundDrawable(background);
        }
        sessionManager=new SessionManager(getApplicationContext());

        loginbtn=(TextView)findViewById(R.id.loginbtn);
        number=(EditText)findViewById(R.id.mobile);
        pins=(EditText)findViewById(R.id.pins);

        progressBar = (ProgressBar) findViewById(R.id.progress);
        mainscreen=(RelativeLayout)findViewById(R.id.overmain);
        bgrnd=(RelativeLayout)findViewById(R.id.bgrnd);

        loginbtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
               loginuser();
            }
        });


        if(sessionManager.isLoggedIn()==true){
            Intent intent = new Intent(LoginActivity.this, MainActivity.class);
            startActivity(intent);
            finish();
        }


        cubeGrid = new CubeGrid();
        cubeGrid.setColor(getResources().getColor(R.color.colorPrimary));
        cubeGrid.start();
        progressBar.setIndeterminateDrawable(cubeGrid);
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
           /* final ProgressDialog showMe = new ProgressDialog(this);
            showMe.setMessage("Please wait");
            showMe.setCancelable(true);
            showMe.show();*/
           mainscreen.setVisibility(View.VISIBLE);

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

                                    userid = json.getString("guard_id");
                                    name=json.getString("guard_name");
                                    Mobile=json.getString("mobile_no");
                                    sessionManager.createLoginSession(userid,name,Mobile);
                                    Intent intent=new Intent(getApplicationContext(),MainActivity.class);
                                    startActivity(intent);
                                    finish();

                                }
                                else {
                                    Toast.makeText(LoginActivity.this,
                                            "Login Failed!!!", Toast.LENGTH_SHORT).show();
                                }
                            } catch (JSONException e) {
                                e.printStackTrace();
                            }
                        }
                    },
                    new Response.ErrorListener() {
                        @Override
                        public void onErrorResponse(VolleyError error) {
                           // showMe.dismiss();
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

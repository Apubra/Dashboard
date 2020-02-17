package com.wk.guestpass.app.Activities;

import android.Manifest;
import android.app.Dialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Color;
import android.graphics.drawable.ColorDrawable;
import android.net.Uri;
import android.os.Build;
import android.support.annotation.NonNull;
import android.support.design.widget.BottomSheetDialog;
import android.support.design.widget.FloatingActionButton;
import android.support.v4.app.ActivityCompat;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentTransaction;
import android.support.v4.content.ContextCompat;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v4.widget.SwipeRefreshLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.DefaultItemAnimator;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.Toolbar;
import android.util.Log;
import android.view.Gravity;
import android.view.View;
import android.view.Window;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.ProgressBar;
import android.widget.RelativeLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.wk.guestpass.app.Adpaters.HomeListAdapter;
import com.wk.guestpass.app.Fragments.AddGuest;
import com.wk.guestpass.app.Fragments.TodaysGuest;
import com.wk.guestpass.app.Fragments.UpcGuest;
import com.wk.guestpass.app.Models.ListModel;
import com.wk.guestpass.app.R;
import com.wk.guestpass.app.Utilities.Config;
import com.wk.guestpass.app.Utilities.RecyclerTouchListener;
import com.wk.guestpass.app.Utilities.SessionManager;
import com.github.ybq.android.spinkit.style.CubeGrid;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Random;
import com.crashlytics.android.Crashlytics;
import io.fabric.sdk.android.Fabric;

import static android.Manifest.permission.ACCESS_FINE_LOCATION;
import static android.Manifest.permission.CALL_PHONE;

public class MainActivity extends AppCompatActivity {

    private RecyclerView mRecyclerView;
    private SessionManager session;
    private HomeListAdapter homeListAdapter;
    private Dialog bottomSheetDialog;
    private ImageView logout, nodata, expstmp, guestroles;
    FloatingActionButton button;
    private List<ListModel> list = new ArrayList<>();
    public static final String TAG = "MyTag";
    StringRequest stringRequest;
    RequestQueue mRequestQueue;
    private ProgressBar progressBar;
    Dialog dialog;
    private static final int PERMISSION_REQUEST_CODE = 200;
    Toolbar toolbar;
    private TextView drname, flatno, apartment, propcodes,logouts, help, about;
    private TextView dname, ddate, dsetime, dintime, dcntct, dguest, dpurpose;
    String nm, ap, noo;
    android.support.v7.app.ActionBar actionBar;
    DrawerLayout Drawer;
    ActionBarDrawerToggle mDrawerToggle;
    private String usersssid, username, pcode, fno, aprt;
    public RelativeLayout mainscreen, bgrnd;
    public CubeGrid cubeGrid;
    SwipeRefreshLayout mSwipeRefreshLayout;
    RelativeLayout addguest, todaysguest, ucguest;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Fabric.with(this, new Crashlytics());
        setContentView(R.layout.drawerhome);

        toolbar = (android.support.v7.widget.Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        getSupportActionBar().setDisplayShowTitleEnabled(false);
        actionBar = getSupportActionBar();

        session = new SessionManager(getApplicationContext());
        HashMap<String, String> users = session.getUserDetails();
        usersssid = users.get(SessionManager.KEY_ID);
        pcode = users.get(SessionManager.KEY_PCODE);
        username = users.get(SessionManager.KEY_USER);
        fno = users.get(SessionManager.KEY_FNO);
        aprt = users.get(SessionManager.KEY_APRT);

        progressBar = (ProgressBar) findViewById(R.id.progress);
        mainscreen=(RelativeLayout)findViewById(R.id.overmain);
        bgrnd=(RelativeLayout)findViewById(R.id.bgrnd);

        drname = (TextView) findViewById(R.id.drname);
        flatno = (TextView) findViewById(R.id.flatno);
        apartment = (TextView) findViewById(R.id.apartment);
        propcodes = (TextView) findViewById(R.id.propcode);

        nodata = findViewById(R.id.nodaata);
        logout = findViewById(R.id.logout);
        logouts = (TextView) findViewById(R.id.logoutss);
        help = (TextView) findViewById(R.id.help);
        about = (TextView) findViewById(R.id.about);

       // requestpermission();

        mSwipeRefreshLayout = (SwipeRefreshLayout) findViewById(R.id.swipeToRefresh);
        mRecyclerView = (RecyclerView) findViewById(R.id.homelistrecycler);
        mRecyclerView.setHasFixedSize(false);
        RecyclerView.LayoutManager mLayoutManager = new LinearLayoutManager(getApplicationContext());
        mRecyclerView.setLayoutManager(mLayoutManager);
        mRecyclerView.setItemAnimator(new DefaultItemAnimator());
        mRecyclerView.addOnItemTouchListener(new RecyclerTouchListener(getApplicationContext(), mRecyclerView, new RecyclerTouchListener.ClickListener() {
            @Override
            public void onClick(View view, int position) {
                bottomsheetdialog(position);
            }

            @Override
            public void onLongClick(View view, int position) {

            }
        }));
        homeListAdapter = new HomeListAdapter(getApplicationContext(), list);
        mRecyclerView.setAdapter(homeListAdapter);

        propcodes.setText(pcode);
        drname.setText(username);
        flatno.setText("( " + fno + " )");
        apartment.setText(aprt);


        button = (FloatingActionButton) findViewById(R.id.bottombtn);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bottomSheetDialog = new BottomSheetDialog(MainActivity.this, R.style.SheetDialog);
                bottomSheetDialog.setContentView(R.layout.bottomsheet);
                bottomSheetDialog.getWindow().setBackgroundDrawable(new ColorDrawable(Color.TRANSPARENT));
                bottomSheetDialog.setCanceledOnTouchOutside(true);
                bottomSheetDialog.setCancelable(true);
                bottomSheetDialog.show();

                addguest = bottomSheetDialog.findViewById(R.id.addnewguest);
                addguest.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        replaceFragment(new AddGuest());
                        bottomSheetDialog.dismiss();
                    }
                });

                todaysguest = bottomSheetDialog.findViewById(R.id.todaysguest);
                todaysguest.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        replaceFragment(new TodaysGuest());
                        bottomSheetDialog.dismiss();
                    }
                });

                ucguest = bottomSheetDialog.findViewById(R.id.upcguest);
                ucguest.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        replaceFragment(new UpcGuest());
                        bottomSheetDialog.dismiss();
                    }
                });
            }
        });

        mSwipeRefreshLayout.setColorSchemeResources(R.color.colorAccent);
        mSwipeRefreshLayout.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {
                HomedataList();
                mSwipeRefreshLayout.setRefreshing(false);
            }
        });


        if(!usersssid.isEmpty()){
            cubeGrid = new CubeGrid();
            cubeGrid.setColor(getResources().getColor(R.color.colorPrimary));
            cubeGrid.start();
            progressBar.setIndeterminateDrawable(cubeGrid);
            HomedataList();
        }


        logout.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                android.app.AlertDialog.Builder builder = new android.app.AlertDialog.Builder(MainActivity.this);
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

        logouts.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                android.app.AlertDialog.Builder builder = new android.app.AlertDialog.Builder(MainActivity.this);
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


        help.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                dialog  = new Dialog(MainActivity.this);
                dialog.requestWindowFeature(Window.FEATURE_NO_TITLE);
                dialog.setContentView(R.layout.help);
                dialog.setCanceledOnTouchOutside(true);

                final Button call;
                final TextView name, aprt, no;
                name = dialog.findViewById(R.id.hnames);
                aprt = dialog.findViewById(R.id.aprtname);
                no = dialog.findViewById(R.id.no);
                call = dialog.findViewById(R.id.call);
                call.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {

                        Intent intent = new Intent(Intent.ACTION_CALL, Uri.parse("tel:" +noo));
                        startActivity(intent);
                    }
                });

                String url = Config.help;
                mRequestQueue = Volley.newRequestQueue(getApplicationContext());

                stringRequest = new StringRequest(Request.Method.POST, url,
                        new Response.Listener<String>() {
                            @Override
                            public void onResponse(String response) {
                                JSONObject j = null;
                                try {
                                    j = new JSONObject(response);

                                    String status = j.getString("status");
                                    nm = j.getString("contact_person_name");
                                    ap = j.getString("appartment");
                                    noo = j.getString("contact_person_mobile");

                                    name.setText(nm);
                                    aprt.setText(ap);
                                    no.setText(noo);

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
                                finish();
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
                        params.put("user_id", usersssid);
                        return params;
                    }
                };
                stringRequest.setTag(TAG);
                mRequestQueue.add(stringRequest);

                dialog.show();

                DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
                drawer.closeDrawer(GravityCompat.START);

            }
        });

        about.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                dialog  = new Dialog(MainActivity.this);
                dialog.requestWindowFeature(Window.FEATURE_NO_TITLE);
                dialog.setContentView(R.layout.about);
                dialog.setCanceledOnTouchOutside(false);

                Button back = (Button)dialog.findViewById(R.id.back);
                back.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        dialog.dismiss();
                    }
                });


                dialog.show();

                DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
                drawer.closeDrawer(GravityCompat.START);

            }
        });

        HomedataList();

        Drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        mDrawerToggle = new ActionBarDrawerToggle(this, Drawer, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close) {

            @Override
            public void onDrawerOpened(View drawerView) {
                super.onDrawerOpened(drawerView);
            }

            @Override
            public void onDrawerClosed(View drawerView) {
                super.onDrawerClosed(drawerView);
            }
        };
        Drawer.addDrawerListener(mDrawerToggle);
        mDrawerToggle.syncState();
    }

    public void HomedataList() {
        mainscreen.setVisibility(View.VISIBLE);
        String url = Config.homelist;
        mRequestQueue = Volley.newRequestQueue(getApplicationContext());
        stringRequest = new StringRequest(Request.Method.POST, url,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        progressBar.setVisibility(View.GONE);
                        list.clear();
                        JSONObject j = null;
                        try {
                            j = new JSONObject(response);

                            String status = j.getString("message");
                            if (status.equals("succesfull")) {

                                JSONArray applist = j.getJSONArray("guest_list");
                                if (applist != null && applist.length() > 0) {
                                    for (int i = 0; i < applist.length(); i++) {


                                        ListModel model = new ListModel();
                                        JSONObject getOne = applist.getJSONObject(i);

                                        model.setIds(getOne.getString("guest_id"));
                                        model.setNames(getOne.getString("guest_name"));
                                        model.setMobilenm(getOne.getString("mobile"));
                                        model.setVstpurpse(getOne.getString("visit_purpose"));
                                        model.setDatess(getOne.getString("visit_date"));
                                        model.setGuestrole(getOne.getString("guest_role"));
                                        model.setGueststatus(getOne.getString("guest_status"));
                                        model.setSettime(getOne.getString("visit_time"));
                                        model.setIntime(getOne.getString("checkin_time"));
                                        model.setTtlguest(getOne.getString("total_guest"));

                                        list.add(model);
                                        homeListAdapter = new HomeListAdapter(getApplicationContext(), list);
                                        mRecyclerView.setAdapter(homeListAdapter);
                                        nodata.setVisibility(View.GONE);
                                        mRecyclerView.setVisibility(View.VISIBLE);
                                    }
                                }
                            } else {
                                nodata.setVisibility(View.VISIBLE);
                                mRecyclerView.setVisibility(View.GONE);
                                mainscreen.setVisibility(View.GONE);
                            }
                        } catch (JSONException e) {
                            nodata.setVisibility(View.VISIBLE);
                            mRecyclerView.setVisibility(View.GONE);
                           // mainscreen.setVisibility(View.GONE);
                            Log.e("TAG", "Something Went Wrong");
                        }
                          mainscreen.setVisibility(View.GONE);
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        mainscreen.setVisibility(View.GONE);
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
                params.put("user_id", usersssid);
                return params;
            }
        };
        stringRequest.setTag(TAG);
        mRequestQueue.add(stringRequest);
    }

    private void NetworkDialog() {
        final Dialog dialogs = new Dialog(MainActivity.this);
        dialogs.requestWindowFeature(Window.FEATURE_NO_TITLE);
        dialogs.setContentView(R.layout.networkdialog);
        dialogs.setCanceledOnTouchOutside(false);
        Button done = (Button) dialogs.findViewById(R.id.done);
        done.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                dialogs.dismiss();
                HomedataList();
            }
        });
        dialogs.show();
    }

    @Override
    protected void onResume() {
        super.onResume();
        HomedataList();
    }

    @Override
    protected void onStop() {
         cubeGrid.stop();
        super.onStop();
        if (mRequestQueue != null) {
            mRequestQueue.cancelAll(TAG);
        }
    }

    private void replaceFragment(Fragment fragment) {
        FragmentManager fragmentManager = getSupportFragmentManager();
        FragmentTransaction transaction = fragmentManager.beginTransaction().addToBackStack(null);
        transaction.replace(R.id.homepage, fragment);
        transaction.commit();
    }

    @Override
    public void onBackPressed() {
        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
    }

    private void bottomsheetdialog(int posy) {

        bottomSheetDialog = new Dialog(MainActivity.this);
        bottomSheetDialog.setContentView(R.layout.popuplayout);
        // bottomSheetDialog.getWindow().setBackgroundDrawable(new ColorDrawable(Color.TRANSPARENT));
        bottomSheetDialog.setCanceledOnTouchOutside(true);
        bottomSheetDialog.setCancelable(true);

       // ImageView cancel = bottomSheetDialog.findViewById(R.id.cancel);
        Button back = bottomSheetDialog.findViewById(R.id.backs);

        dname = bottomSheetDialog.findViewById(R.id.detailname);
        ddate = bottomSheetDialog.findViewById(R.id.detaildate);
        dsetime = bottomSheetDialog.findViewById(R.id.settime);
        dintime = bottomSheetDialog.findViewById(R.id.intime);
        dcntct = bottomSheetDialog.findViewById(R.id.contact);
        dguest = bottomSheetDialog.findViewById(R.id.detailttlguest);
        dpurpose = bottomSheetDialog.findViewById(R.id.visitpurpose);
        guestroles = bottomSheetDialog.findViewById(R.id.guestrole);
        expstmp = bottomSheetDialog.findViewById(R.id.expstmp);

        ListModel model = list.get(posy);

        dname.setText(model.getNames().substring(0, 1).toUpperCase() + model.getNames().substring(1));
        ddate.setText(model.getDatess());
        dsetime.setText(convrttime(model.getSettime()));
        dintime.setText(model.getIntime());
        dcntct.setText(model.getMobilenm());
        dguest.setText(model.getTtlguest() + " GUEST");
        dpurpose.setText(model.getVstpurpse());
        if (model.getGuestrole().equals("1")) {
            guestroles.setImageDrawable(ContextCompat.getDrawable(this, R.drawable.ic_thumbup));
        } else {
            guestroles.setImageDrawable(ContextCompat.getDrawable(this, R.drawable.ic_thumbdown));
        }
        if (model.gueststatus.equals("2")) {
            expstmp.setVisibility(View.VISIBLE);
        }
        Random rnd = new Random();
        int color = Color.argb(255, rnd.nextInt(256), rnd.nextInt(256), rnd.nextInt(256));

       /* cancel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bottomSheetDialog.dismiss();
            }
        });*/
        back.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bottomSheetDialog.dismiss();
            }
        });

        bottomSheetDialog.show();
    }

    public String convrttime(String times) {
        SimpleDateFormat dateFormat = new SimpleDateFormat("hh:mm");
        SimpleDateFormat dateFormat2 = new SimpleDateFormat("hh:mmaa");

        try {
            Date date = dateFormat.parse(times);
            times = dateFormat2.format(date);
            Log.e("Time", times);
        } catch (ParseException e) {
        }
        return times;
    }

    private void requestpermission() {
        ActivityCompat.requestPermissions(MainActivity.this, new String[]
                {Manifest.permission.CALL_PHONE}, PERMISSION_REQUEST_CODE);
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
                                                requestPermissions(new String[]{CALL_PHONE},
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
}

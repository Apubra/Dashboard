package com.wk.guestpass.app.Fragments;

import android.app.Dialog;
import android.app.ProgressDialog;
import android.content.DialogInterface;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.support.v4.content.ContextCompat;
import android.support.v4.widget.SwipeRefreshLayout;
import android.support.v7.widget.DefaultItemAnimator;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.SearchView;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
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
import com.wk.guestpass.app.FragAdapters.TodaysGuestAdapter;
import com.wk.guestpass.app.Models.ListModel;
import com.wk.guestpass.app.R;
import com.wk.guestpass.app.Utilities.Config;
import com.wk.guestpass.app.Utilities.RecyclerTouchListener;
import com.wk.guestpass.app.Utilities.SessionManager;
import com.github.ybq.android.spinkit.style.CubeGrid;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import com.crashlytics.android.Crashlytics;
import io.fabric.sdk.android.Fabric;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import es.dmoral.toasty.Toasty;
import pl.droidsonroids.gif.GifImageView;

public class TodaysGuest extends Fragment {

    private RecyclerView recyclerView;
    private SessionManager session;
    private String usersssid, userna;
    private TextView dname, ddate, dsetime, dintime, dcntct, dguest, dpurpose;
    private TodaysGuestAdapter todaysGuestAdapter;
    SwipeRefreshLayout mSwipeRefreshLayout;
    private ImageView nodata, logout, back, guestroles, expstmp;
    private List<ListModel> list = new ArrayList<>();
    private Dialog bottomSheetDialog;
    public static final String TAG = "MyTag";
    StringRequest stringRequest,stringRequest1;
    RequestQueue mRequestQueue,mRequestQueue1;
    ProgressBar progressBar;
    public GifImageView gifImageView;
    public CubeGrid cubeGrid;
    private SearchView searchView;
    public RelativeLayout mainscreen,bgrnd;

    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        Fabric.with(getActivity(), new Crashlytics());
        View v = inflater.inflate(R.layout.fragtodaysguest, container, false);

        session = new SessionManager(getActivity());
        HashMap<String, String> users = session.getUserDetails();
        usersssid = users.get(SessionManager.KEY_ID);

        nodata = (ImageView)v.findViewById(R.id.nodaata);
        progressBar = (ProgressBar)v. findViewById(R.id.progress);
        mainscreen=(RelativeLayout)v.findViewById(R.id.overmain);
        bgrnd=(RelativeLayout)v.findViewById(R.id.bgrnd);

        logout = v.findViewById(R.id.logout);
        back  = v.findViewById(R.id.back);
        searchView = (SearchView)v.findViewById(R.id.searchview);
        mSwipeRefreshLayout = (SwipeRefreshLayout) v.findViewById(R.id.swipeToRefresh);
        back.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                getFragmentManager().popBackStack();
            }
        });

        recyclerView = (RecyclerView)v.findViewById(R.id.TodaysRecycler);
        recyclerView.setHasFixedSize(false);
       /* RecyclerView.LayoutManager mLayoutManager = new LinearLayoutManager(getActivity());
        recyclerView.setLayoutManager(mLayoutManager);*/
        recyclerView.setLayoutManager(new GridLayoutManager(getActivity(), 2));
        recyclerView.setItemAnimator(new DefaultItemAnimator());
        recyclerView.addOnItemTouchListener(new RecyclerTouchListener(getActivity(),
                recyclerView, new RecyclerTouchListener.ClickListener() {
            @Override
            public void onClick(View view, int position) {
                bottomsheetdialog(position);
            }

            @Override
            public void onLongClick(View view, final int position) {
                final String stat=list.get(position).getGueststatus();
                if(stat.equals("0")){
                    android.app.AlertDialog.Builder builder = new android.app.AlertDialog.Builder(getActivity());
                    builder.setMessage("Are you sure you want to delete");
                    builder.setPositiveButton("Yes", new DialogInterface.OnClickListener() {
                        public void onClick(DialogInterface dialog, int id) {

                            deleteguest(list.get(position).getIds());
                            dialog.dismiss();
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
                else{
                    Toasty.error(getActivity(), "Sorry!!! Data Can't be Deleted", Toast.LENGTH_SHORT, true).show();
                }
            }
        }));
        todaysGuestAdapter=new TodaysGuestAdapter(getActivity(), list);
        recyclerView.setAdapter(todaysGuestAdapter);

        if(!usersssid.isEmpty()){
            cubeGrid = new CubeGrid();
            cubeGrid.setColor(getResources().getColor(R.color.colorPrimary));
            cubeGrid.start();
            progressBar.setIndeterminateDrawable(cubeGrid);
            TodaysdataList();
        }

        mSwipeRefreshLayout = (SwipeRefreshLayout)v.findViewById(R.id.swipeToRefresh);
        mSwipeRefreshLayout.setColorSchemeResources(R.color.colorAccent);
        mSwipeRefreshLayout.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {

                TodaysdataList();
                mSwipeRefreshLayout.setRefreshing(false);
            }
        });


        logout.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                logout.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        android.app.AlertDialog.Builder builder = new android.app.AlertDialog.Builder(getActivity());
                        builder.setMessage("Are you sure you want to Logout");
                        builder.setPositiveButton("Yes", new DialogInterface.OnClickListener() {
                            public void onClick(DialogInterface dialog, int id) {
                                session.logoutUser();
                                dialog.dismiss();
                                getActivity().finish();
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
            }
        });

        searchView.setMaxWidth(Integer.MAX_VALUE);
        searchView.setOnQueryTextListener(new SearchView.OnQueryTextListener() {
            @Override
            public boolean onQueryTextSubmit(String query) {
                return false;
            }

            @Override
            public boolean onQueryTextChange(String newText) {
                if (todaysGuestAdapter == null) {
                    return false;
                } else {
                    todaysGuestAdapter.getFilter().filter(newText);
                    return true;
                }
            }
        });

        TodaysdataList();

        return v;

    }

    public void deleteguest(final String guestid) {

        final ProgressDialog showMe = new ProgressDialog(getActivity());
        showMe.setMessage("Please wait");
        showMe.setCancelable(true);
        showMe.setCanceledOnTouchOutside(false);
        showMe.show();

        String url = Config.deleteguest;
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
                                TodaysdataList();
                            }
                            else {
                                Toasty.info(getActivity(), ""+j.getString("messege"),
                                        Toast.LENGTH_SHORT, true).show();
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
                        //Toasty.error(getActivity(), "Network Error.", Toast.LENGTH_SHORT, true).show();
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
                params.put("guest_id", guestid);
                return params;
            }
        };
        stringRequest1.setTag(TAG);
        mRequestQueue1.add(stringRequest1);
    }

    public void TodaysdataList() {
        mainscreen.setVisibility(View.VISIBLE);
        String url = Config.todayslist;
        mRequestQueue = Volley.newRequestQueue(getActivity());

        stringRequest = new StringRequest(Request.Method.POST, url,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        list.clear();
                        progressBar.setVisibility(View.GONE);
                        JSONObject j = null;
                        try {
                            j = new JSONObject(response);

                            String status = j.getString("status");
                            if (status.equals("1")) {
                                JSONArray applist = j.getJSONArray("todays_guests");
                                if (applist != null && applist.length() > 0) {
                                    for (int i = 0; i < applist.length(); i++) {
//                               for (int i = 0; i <= 10; i++) {

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
                                        todaysGuestAdapter = new TodaysGuestAdapter(getActivity(), list);
                                        recyclerView.setAdapter(todaysGuestAdapter);
                                        nodata.setVisibility(View.GONE);
                                        recyclerView.setVisibility(View.VISIBLE);
                                    }
                                }
                            } else {
                                nodata.setVisibility(View.VISIBLE);
                                recyclerView.setVisibility(View.GONE);
                                mainscreen.setVisibility(View.GONE);
                            }
                        } catch (JSONException e) {
                            Log.e("TAG", "Something Went Wrong");
                        }
                        mainscreen.setVisibility(View.GONE);
                    }

                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        progressBar.setVisibility(View.GONE);
                       /* Toast toast = Toast.makeText(getActivity(), "Network Error", Toast.LENGTH_SHORT);
                        toast.setGravity(Gravity.CENTER, 0, 0);
                        toast.show();*/
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
                TodaysdataList();
            }
        });
        dialogs.show();
    }


    private void bottomsheetdialog(int posy) {

        bottomSheetDialog = new Dialog(getActivity());
        bottomSheetDialog.setContentView(R.layout.popuplayout);

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
            guestroles.setImageDrawable(ContextCompat.getDrawable(getActivity(), R.drawable.ic_thumbup));
        } else {
            guestroles.setImageDrawable(ContextCompat.getDrawable(getActivity(), R.drawable.ic_thumbdown));
        }
        if (model.gueststatus.equals("2")) {
            expstmp.setVisibility(View.VISIBLE);
        }
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


}
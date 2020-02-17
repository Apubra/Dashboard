package com.wk.guestpass.app.Utilities;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;

import com.wk.guestpass.app.Activities.LoginActivity;

import java.util.HashMap;



/**
 * Created by wktechsys on 4/17/2017.
 */
public class SessionManager {

    Context context;
    public static final String KEY_ID = "id";
    public static final String KEY_AdminID="admnid";
    public static final String KEY_MOB="Mobile";
    public static final String KEY_FlatID="Flatid";
    public static final String KEY_PCODE="pcode";
    public static final String KEY_USER="user";
    public static final String KEY_FNO="flatno";
    public static final String KEY_APRT="apartment";
    private static final String Pref_Name= "Loginpref";
    private static final String IS_LOGIN = "IsLoggedIn";
    public static final String IS_Lock ="Islocked";

    SharedPreferences.Editor editor;
    SharedPreferences pref;

    Context _context;
    private static final String IS_FIRST_TIME_LAUNCH = "IsFirstTimeLaunch";

    public SessionManager(Context context1) {
        this.context=context1;
        pref = context.getSharedPreferences(Pref_Name, Context.MODE_PRIVATE);
        editor = pref.edit();
    }

    public void createLoginSession(String id, String adminid, String fltid, String mobile,String pcode, String user, String fno, String aprt){

        editor.putBoolean(IS_LOGIN,true);
        editor.putString(KEY_ID, id);
        editor.putString(KEY_AdminID, adminid);
        editor.putString(KEY_FlatID, fltid);
        editor.putString(KEY_MOB, mobile);
        editor.putString(KEY_PCODE, pcode);
        editor.putString(KEY_USER, user);
        editor.putString(KEY_FNO, fno);
        editor.putString(KEY_APRT, aprt);
        editor.commit();
    }


    public HashMap<String, String> getUserDetails(){
        HashMap<String, String> user = new HashMap<String, String>();

        user.put(KEY_ID, pref.getString(KEY_ID, ""));
        user.put(KEY_MOB, pref.getString(KEY_MOB, ""));
        user.put(KEY_AdminID, pref.getString(KEY_AdminID,""));
        user.put(KEY_FlatID, pref.getString(KEY_FlatID,""));
        user.put(KEY_PCODE, pref.getString(KEY_PCODE, ""));
        user.put(KEY_USER, pref.getString(KEY_USER, ""));
        user.put(KEY_FNO, pref.getString(KEY_FNO,""));
        user.put(KEY_APRT, pref.getString(KEY_APRT,""));
        user.put(IS_Lock,pref.getString(IS_Lock,""));

        return user;
    }

    public void logoutUser(){
        editor.clear();
        editor.commit();

        Intent i = new Intent(context,LoginActivity.class);
        i.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TASK);
        i.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
        context.startActivity(i);
    }

    public void setFirstTimeLaunch(boolean isFirstTime) {
        editor.putBoolean(IS_FIRST_TIME_LAUNCH, isFirstTime);
        editor.commit();
    }

    public boolean isFirstTimeLaunch() {
        return pref.getBoolean(IS_FIRST_TIME_LAUNCH, true);
    }

    public boolean isLoggedIn(){
        return pref.getBoolean(IS_LOGIN, false);
    }
}

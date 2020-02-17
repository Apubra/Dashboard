package com.wk.guestpass.guard;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;

import java.util.HashMap;

/**
 * Created by wktechsys on 4/17/2017.
 */
public class SessionManager {

    Context context;
    public static final String KEY_ID = "id";
    public static final String KEY_NAME="Name";
    public static final String KEY_MOB="Email";
    private static final String Pref_Name= "Loginpref";
    private static final String IS_LOGIN = "IsLoggedIn";
    public static final String IS_Lock ="Islocked";

    SharedPreferences.Editor editor;
    SharedPreferences pref;

    public SessionManager(Context context1) {
        this.context=context1;
        pref = context.getSharedPreferences(Pref_Name, Context.MODE_PRIVATE);
        editor = pref.edit();
    }

    public void createLoginSession(String id, String name, String mobile){

        editor.putBoolean(IS_LOGIN,true);
        editor.putString(KEY_ID, id);
        editor.putString(KEY_NAME, name);
        editor.putString(KEY_MOB, mobile);
        editor.commit();
    }


    public HashMap<String, String> getUserDetails(){
        HashMap<String, String> user = new HashMap<String, String>();

        user.put(KEY_ID, pref.getString(KEY_ID, ""));
        user.put(KEY_MOB, pref.getString(KEY_MOB, ""));
        user.put(KEY_NAME, pref.getString(KEY_NAME,""));
        user.put(IS_Lock,pref.getString(IS_Lock,""));
        // return user
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

    public boolean isLoggedIn(){
        return pref.getBoolean(IS_LOGIN, false);
    }
}

package com.wk.guestpass.app.Adpaters;

import android.content.Context;
import android.graphics.Color;
import android.support.v4.content.ContextCompat;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;
import android.widget.TextView;

import com.wk.guestpass.app.Models.ListModel;
import com.wk.guestpass.app.R;
import com.github.ivbaranov.mli.MaterialLetterIcon;

import java.util.List;

public class HomeListAdapter extends RecyclerView.Adapter<HomeListAdapter.MyViewHolder> {

    private Context context;
    int lastPosition = 0;
    private List<ListModel> list;

    public HomeListAdapter(Context context,List<ListModel> list) {
        this.context = context;
        this.list = list;
    }

    public class MyViewHolder extends RecyclerView.ViewHolder {
        MaterialLetterIcon letterIcon;
        TextView name,mobnum,guestrole,guestat,ttlguest,vstime,chkint;
        ImageView thumb, expstamp;

        public MyViewHolder(View view) {
            super(view);

            thumb = view.findViewById(R.id.thumb);
            expstamp = view.findViewById(R.id.expstampp);
            name=view.findViewById(R.id.guestname);
            mobnum=view.findViewById(R.id.guestnum);
            guestat=view.findViewById(R.id.gueststatus);
            ttlguest=view.findViewById(R.id.totalguest);
            vstime=view.findViewById(R.id.visittime);
            chkint=view.findViewById(R.id.intime);

        }
    }
    @Override
    public HomeListAdapter.MyViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View itemView = LayoutInflater.from(parent.getContext()).inflate(R.layout.homelistdetails, parent, false);
        return new HomeListAdapter.MyViewHolder(itemView);
    }

    @Override
    public void onBindViewHolder(MyViewHolder holder, final int position) {

        ListModel model=list.get(position);
        holder.name.setText(model.getNames().substring(0,1).toUpperCase()+model.getNames().substring(1));
        holder.mobnum.setText(model.getMobilenm());
        holder.ttlguest.setText(model.getTtlguest()+" Guest");
        holder.vstime.setText(model.getSettime());
        holder.chkint.setText(model.getIntime());
        if(model.gueststatus.equals("2")){
            holder.guestat.setText("Expired");
            holder.guestat.setTextColor(Color.RED);
            holder.chkint.setVisibility(View.INVISIBLE);
        }
        else if(model.gueststatus.equals("3")){
            holder.guestat.setText("Guest in");
        }
        if(model.getGuestrole().equals("1")){
            holder.thumb.setImageDrawable(ContextCompat.getDrawable(context, R.drawable.ic_thumbup));
        }
        else{
            holder.thumb.setImageDrawable(ContextCompat.getDrawable(context, R.drawable.ic_thumbdown));
        }
       // setAnimation(holder.itemView, position);

    }
    @Override
    public int getItemCount() {
        return list.size();
    }

    private void setAnimation(View viewToAnimate, int position)
    {

        Animation animation = AnimationUtils.loadAnimation(context, android.R.anim.slide_in_left);
        animation.setDuration(550);
        animation.setStartOffset(position*200);
        viewToAnimate.startAnimation(animation);
        lastPosition = position;

    }

}

package com.wk.guestpass.app.FragAdapters;

import android.content.Context;
import android.support.v4.content.ContextCompat;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Filterable;
import android.widget.ImageView;
import android.widget.TextView;

import com.wk.guestpass.app.Models.ListModel;
import com.wk.guestpass.app.R;

import java.util.ArrayList;
import java.util.List;

public class UpcGuestAdapter extends RecyclerView.Adapter<UpcGuestAdapter.MyViewHolder> implements Filterable {

    private Context context;
    int lastPosition =0;
    private List<ListModel> list;
    private List<ListModel> lists;

    public UpcGuestAdapter(Context context,List<ListModel> list) {
        this.context = context;
        this.list=list;
        lists=list;
    }

    public class MyViewHolder extends RecyclerView.ViewHolder {

        ImageView  thumb, expstamp;
        TextView name,mobnum,guestrole,guestat,ttlguest,vstime,chkint, date;

        public MyViewHolder(View view) {
            super(view);

            thumb = view.findViewById(R.id.thumb);
            name=view.findViewById(R.id.guestname);
            mobnum=view.findViewById(R.id.guestnum);
            //   guestrole=view.findViewById(R.id.guestrole);
            guestat=view.findViewById(R.id.gueststatus);
            ttlguest=view.findViewById(R.id.totalguest);
            vstime=view.findViewById(R.id.visittime);
           // chkint=view.findViewById(R.id.checkintime);
            date=view.findViewById(R.id.ucdate);
            expstamp=view.findViewById(R.id.expstampp);
        }
    }
    @Override
    public UpcGuestAdapter.MyViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View itemView = LayoutInflater.from(parent.getContext()).inflate(R.layout.ucguestdetails, parent, false);
        return new UpcGuestAdapter.MyViewHolder(itemView);
    }

    @Override
    public void onBindViewHolder(MyViewHolder holder, final int position) {

        ListModel model=list.get(position);
        holder.name.setText(model.getNames().substring(0,1).toUpperCase()+model.getNames().substring(1));
        holder.mobnum.setText(model.getMobilenm());
        holder.ttlguest.setText(model.getTtlguest()+" Guest");
        holder.vstime.setText(model.getSettime());
      //  holder.chkint.setText(model.getCheckin());
        holder.date.setText(model.getDatess());
        if(model.getGuestrole().equals("1")){
            holder.thumb.setImageDrawable(ContextCompat.getDrawable(context, R.drawable.ic_thumbup));
        }
        else{
            holder.thumb.setImageDrawable(ContextCompat.getDrawable(context, R.drawable.ic_thumbdown));
        }

    }
    @Override
    public int getItemCount() {
        return list.size();
    }

    @Override
    public android.widget.Filter getFilter() {

        return new android.widget.Filter() {
            @Override
            protected FilterResults performFiltering(CharSequence charSequence) {

                String charString = charSequence.toString();

                if (charString.isEmpty()) {
                    list = lists;
                } else {

                    ArrayList<ListModel> filteredList = new ArrayList<>();

                    for (ListModel androidVersion : lists) {

                        if (androidVersion.getNames().toLowerCase().contains(charString) ||
                                androidVersion.getNames().contains(charString) ||
                                androidVersion.getMobilenm().contains(charString)) {
                            filteredList.add(androidVersion);
                        }
                    }
                    list = filteredList;
                }

                FilterResults filterResults = new FilterResults();
                filterResults.values = list;
                return filterResults;
            }

            @Override
            protected void publishResults(CharSequence charSequence, FilterResults filterResults) {
                list = (ArrayList<ListModel>) filterResults.values;
                notifyDataSetChanged();
            }
        };
    }

}

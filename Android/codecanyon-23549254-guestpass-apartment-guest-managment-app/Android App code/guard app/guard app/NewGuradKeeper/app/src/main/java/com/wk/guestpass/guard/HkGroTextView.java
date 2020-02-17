package com.wk.guestpass.guard;

import android.annotation.SuppressLint;
import android.content.Context;
import android.graphics.Typeface;
import android.util.AttributeSet;
import android.widget.TextView;

/**
 * Copyright 2017 Winnerawan T
 * Unauthorized copying of this file, via any medium is strictly
 * prohibited Proprietary and confidential
 * Written by Winnerawan T <winnerawan@gmail.com>, June 2017
 */

@SuppressLint("AppCompatCustomView")
public class HkGroTextView extends TextView {

    public HkGroTextView(Context context, AttributeSet attrs, int defStyle) {
        super(context, attrs, defStyle);
        init();
    }

    public HkGroTextView(Context context, AttributeSet attrs) {
        super(context, attrs);
        init();
    }

    public HkGroTextView(Context context) {
        super(context);
        init();
    }

    private void init() {
        if (!isInEditMode()) {
            Typeface tf = Typeface.createFromAsset(getContext().getAssets(), "HKGROTESK-MEDIUM.ttf");
            setTypeface(tf);
        }
    }
}

package com.wk.guestpass.guard;

import android.content.Context;
import android.graphics.Typeface;
import android.util.AttributeSet;

/**
 * Copyright 2017 Winnerawan T
 * Unauthorized copying of this file, via any medium is strictly
 * prohibited Proprietary and confidential
 * Written by Winnerawan T <winnerawan@gmail.com>, June 2017
 */

public class VerdanaTextView extends android.support.v7.widget.AppCompatTextView {

    public VerdanaTextView(Context context, AttributeSet attrs, int defStyle) {
        super(context, attrs, defStyle);
        init();
    }

    public VerdanaTextView(Context context, AttributeSet attrs) {
        super(context, attrs);
        init();
    }

    public VerdanaTextView(Context context) {
        super(context);
        init();
    }

    private void init() {
        if (!isInEditMode()) {
            Typeface tf = Typeface.createFromAsset(getContext().getAssets(), "VERDANA.TTF");
            setTypeface(tf);
        }
    }
}

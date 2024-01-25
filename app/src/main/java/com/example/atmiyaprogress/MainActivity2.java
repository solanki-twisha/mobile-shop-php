package com.example.atmiyaprogress;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;

public class MainActivity2 extends AppCompatActivity {

    AutoCompleteTextView actv;
    String[] city = {"rajkot","ahemdabad","jamnager","morbi","surat","baroda"};
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

        actv=findViewById(R.id.autoCompleteTextView);

        ArrayAdapter<String> adpter = new ArrayAdapter<String>(this, android.R.layout.simple_dropdown_item_1line,city);
        actv.setAdapter(adpter);
    }
}
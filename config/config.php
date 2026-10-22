<?php
// Inventory System - application settings. Folder is protected by .htaccess.
declare(strict_types=1);

return [
    "app_name"   => "AgriInventory",
    "app_title"  => "Agri-Supply Inventory System",
    "base_url"   => "/AgriInventory",
    // Branding shown in the sidebar and on the sign-in page
    "brand_name" => "Agri-Supply",
    "brand_sub"  => "Inventory System",
    "login_headline" => "Stock, receiving and sales in one place.",
    "login_lead"     => "Keep every product counted, every delivery verified and every sale recorded.",
    "login_points"   => [
        ["boxes",           "Live stock levels with reorder-level warnings"],
        ["truck",           "Verified receiving of supplier deliveries"],
        ["receipt-cutoff",  "Sales receipts and a complete audit trail"],
    ],
    "timezone"   => "Asia/Manila",
    "debug"      => false,
    "session_name" => "agriinv_sess",
    "session_lifetime" => 3600,
    "max_failed_logins" => 5,
    "lockout_minutes"   => 15,
    "log_file"   => __DIR__ . "/../storage/logs/app.log",
    
    "db" => [
        "host"    => "sql108.infinityfree.com",
        "port"    => 3306,
        "name"    => "if0_43241759_agri_inventory",
        "user"    => "if0_43241759",
        "pass"    => "Jhonrex2004",
        "charset" => "utf8mb4",
    ],
];

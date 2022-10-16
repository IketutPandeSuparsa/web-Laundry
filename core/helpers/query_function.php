<?php

function query(string $query, bool $result_single = false): array|null
{
    global $conn;

    if($result_single) {
        $result = $conn->query($query)->fetch_assoc();
    }
    
    else {
        $result = $conn->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    return $result;
}

function allTable(string $table)
{
    $query = "SELECT * FROM $table";
    return query($query);
}

function whereTable(string $table ,string $nama_kolom_tabel, string $nilai)
{
    $query = "SELECT * FROM $table WHERE $nama_kolom_tabel = '$nilai' ";
    return query($query);
}

function findTable(string $table, string $nama_kolom_tabel, string $nilai)
{
    $query = "SELECT * FROM $table WHERE $nama_kolom_tabel = '$nilai'";
    return query($query, true);
}

function deleteTable(string $table ,string $nama_kolom_tabel, string $nilai)
{
    $query = "DELETE FROM $table WHERE $nama_kolom_tabel = '$nilai'";
    return query($query);
}
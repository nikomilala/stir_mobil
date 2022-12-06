@extends('layouts.main')

    @section('container')
        <h1>Paket yang ditawarkan</h1>
        <ul>


        </ul>
        <h2>Paket Reguler</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Program</th>
                <th scope="col">Sisi</th>
                <th scope="col">Durasi</th>
                <th scope="col">Keterangan</th>
            </tr>
            </thead>
            <tbody>
            @foreach($paket as $p)
            <tr>
                <td>{{$p->nama_program}}</td>
                <td>{{$p->sesi}} x Praktek</td>
                <td>{{$p->durasi}} Jam</td>
                <td>{{$p->keterangan}}</td>
            </tr>
            @endforeach

            </tbody>
        </table>
    @endsection

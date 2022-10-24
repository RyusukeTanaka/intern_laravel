@extends('layouts.layout')
@section('content')
    <div class="tables" style="background-color:#f8f8ff;">
        <div class="list-header">
            <div class="list-header-left">
                UserList
            </div>
            <div class="list-header-right">
                <button class="btn-send">send mail</button>
                <button class="btn-add">
                    <a href="{{ route('user.create') }}" class="btn-add">+Add new</a>
                </button>
            </div>
        </div>
        <table class="user-list" style="margin:10px auto;width:95%;">
            <tbody>
            <tr class="calum-list">
                <th class="calum avator solid" style="text-align:center;">Avator</th>
                <th class="calum solid">Name</th>
                <th class="calum solid">Email</th>
                <th class="calum solid">Action</th>
            </tr>
            @forelse($users as $user)
                <tr class="user">
                    <td class="avator solid" style="text-align:center;">
                        <i class="fa-solid fa-user" style="font-size:30px;"></i>
                    </td>
                    <td class="name solid">
                        {{ $user -> name }}
                    </td>
                    <td class="email solid">
                        {{ $user -> email }}
                    </td>
                    <td class="action solid">
                        <button class="edit btn btn-blue">Edit</button>
                        <button class="delete btn btn-red">Delete</button>
                    </td>
                </tr>
            @empty
                <li>何も無いです</li>
            @endforelse
            </tbody>
        </table>
        <div class="text-center mt-3 mt-sm-3">
            <ul class="pagination justify-content-center mb-0">
                <li class="page-item disabled"> <span class="page-link">＜</span> </li>
                <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                <!-- <li class="page-item"><a class="page-link" href="#">...</a></li> -->
                <!-- <li class="page-item"><a class="page-link" href="#">25</a></li> -->
                <li class="page-item"> <a class="page-link" href="#">＞</a> </li>
            </ul>
        </div>
    </div>
@endsection

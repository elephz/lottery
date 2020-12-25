@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row p-3">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <div class="card " >
                                <div class="card-header">
                                    สุ่มรางวัล
                                </div>
                                <div class="card-body p-2">
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-success btn-block random-btn"><i class="fas fa-random"></i> สุ่มรางวัล</button>
                                            <button class="btn btn-info btn-block reset-btn"><i class="fas fa-undo"></i> รีเซ็ต</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            ตรวจรางวัล
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <form class="form-inline example w-100">
                                <input type="text" placeholder="โปรดป้อนหมายเลขของคุณ" class='number' name="search2" maxlength="3" >
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            </div>
                            <div class="row my-2">
                                <table class="table table-bordered">

                                    <thead>
                                        <tr>
                                            <th scope="col" colspan='2'>รางวัลที่1</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td ><span id='1st'></span></td>
                                        </tr>
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col" colspan='2'>รางวัลที่ 2 จำนวน 3 รางวัล</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item" ><span id='2st_1'></span></li>
                                                    <li class="list-inline-item" ><span id='2st_2'></span></li>
                                                    <li class="list-inline-item" ><span id='2st_3'></span></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>

                                     <thead>
                                        <tr>
                                            <th scope="col" colspan='2'>รางวัลเลขข้างเคียงรางวัลที่ 1 จำนวน 2 รางวัล</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><span id='oc_1'></span></li>
                                                    <li class="list-inline-item"><span id='oc_2'></span></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col" colspan='2'>รางวัลเลขท้าย 2 ตัว จำนวน 4 รางวัล</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span id='last_two'></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection
  

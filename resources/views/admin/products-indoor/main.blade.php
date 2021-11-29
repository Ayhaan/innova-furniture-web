@extends('layouts.back')

@section('title-page')
    <h3>Products Indoor</h3>

@endsection
@section('content')
 
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card">
                        <!-- table head dark -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>NAME</th>
                                        <th>PRIC€</th>
                                        <th>COMMENTS</th>
                                        <th>POPULAR</th>
                                        <th>CATEGORIES</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $item)
                                        <tr>
                                            <td >{{ $item->name }}</td>
                                            <td>{{ $item->price }}€</td>
                                            <td>{{ count($item->comments) }}</td>
                                            <td >{{ $item->popular ? "True" : "false" }}</td>
                                            <td>
                                                @foreach ($item->categories as $categ)
                                                    {{ $categ->name }},
                                                @endforeach
                                            </td>
                                            <td><button class="btn btn-primary">show</button></td>
                                        </tr>
                                    @endforeach
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

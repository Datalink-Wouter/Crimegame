@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crimes</div>
                
                <div class="card-body">
                    <form method="post" action="{{route('perform-crime')}}">
                        @csrf
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Earn</th>
                                    <th scope="col">Select</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=0)
                                @foreach($crimes as $crime)
                                    @php($i++)
                                    <tr>
                                        <th scope="row"><label for="{{$crime->id}}">{{$i}}</label></th>
                                        <td><label for="{{$crime->id}}">{{$crime->name}}</label></td>
                                        <td><label for="{{$crime->id}}">{{$crime->earn_xp_factor}}xp / €{{$crime->earn_cash_factor}}</label></td>
                                        <td><input type="radio" name="crime" id="{{$crime->id}}" /></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <input type="submit" class="btn btn-primary" value="Perform crime" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

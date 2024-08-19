@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit User
                </div>
                <div class="float-end">
                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="products" class="col-md-4 col-form-label text-md-end text-start">Assgined Exercises</label>
                        <div class="col-md-6">
                          @foreach ($user->products as $product)
                              <p> {{ $product->name }}</p>
                          @endforeach
                        </div>
                    </div>

                    <form action="{{ route('assign-exercise') }}" method="POST">
                        @csrf
                        <select name="user_id">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        <select name="exercise_id">
                            @foreach($exercises as $exercise)
                                <option value="{{ $exercise->id }}">{{ $exercise->name }}</option>
                            @endforeach
                        </select>
                        <input type="date" name="assigned_date">
                        <textarea name="notes"></textarea>
                        <button type="submit">Assign Exercise</button>
                    </form>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update User">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>    
@endsection
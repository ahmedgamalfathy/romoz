@extends('layouts.master')
@section('title',"تعديل الاهداف")
@section('content')
<div class="container pt-5">
    <div class="card shadow-sm border-0">
        <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
            <h5 id="AddUserLabel" class="mb-0">تعديل الاهداف </h5>
        </div>
        <div class="card-body">
            <form class="add-new-user" id="addNewUserForm" action="{{ route('goals.update', $goal->id ) }}" method="POST" enctype="multipart/form-data"   >
                @csrf
                @method('PUT')
                <div class="row ">
                    <!-- Name Field -->
                    <div class="col-12">
                        <label class="form-label" for="add-user-fullname">المحتوى</label>
                        <input type="text" name="title" value="{{ $goal->title }}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="add-user-fullname">المحتوى</label>
                        <textarea
                        type="text"
                        class="form-control"
                        id="add-user-fullname"
                         placeholder="اضف نص"
                         rows="8"
                         name="text" >{{ $goal->text }} </textarea>
                        @error('text')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-success me-2" onclick="return confirm('Are you sure?')">تعديل</button>
                    <a href="{{ route('goals.index') }}" class="btn btn-danger">تراجع</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection



@extends('layouts.account_app')
@section('page-data')
        <form class="form">
            <div class="form-group">
                <label class="form-label">নাম</label>
                <input type="text" value="{{auth()->user()?->name}}" name="name" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label class="form-label">ফোন নাম্বার</label>
                <input type="text" value="{{auth()->user()?->phone}}" placeholder="+8801XXXXXXXXX" name="phone" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label class="form-label">ছবি</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mt-3">
                <img style="height: 150px" alt="profile-image" class="border" src="{{auth()->user()?->image ?? 'https://oldweb.brur.ac.bd/wp-content/uploads/2019/03/male.jpg'}}">
            </div>

            <div class="form-group mt-4">
               <button type="submit" class="btn btn-brand-secondary w-100">
                   <i class="bi bi-save me-1"></i>
                   <span>তথ্য পরিবর্তন করুন</span>
               </button>
            </div>
        </form>
@endsection

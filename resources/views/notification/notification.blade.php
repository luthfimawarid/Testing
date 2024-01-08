@extends('pamer.main1')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">
                        Notifications
                    </div>
                    <div class="card-body">
                        @forelse($notifications as $notification)
                            <div class="alert alert-info" role="alert">
                                {{ $notification->message }}
                                {{-- @if(!$notification->read)
                                    <a href="{{ route('notifications.markAsRead', $notification->id) }}" class="btn btn-sm btn-light ms-2">Mark as Read</a>
                                @endif --}}
                            </div>
                        @empty
                            <p>No notifications</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('dashborde.include.top')

<div class="container-scroller">
    @include('dashborde.include.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('dashborde.include.sidebar')
        @yield('content')
        <div class="container-fluid page-body-wrapper">

        
            <div class="container-fluid p-3">
                <div class="table-responsive" style="overflow-x: auto; -webkit-overflow-scrolling: touch;">
                    <table class="table table-bordered table-striped table-hover w-100" style="table-layout: fixed;">
                        <thead class="bg-light">
                            <tr>
                                <th style="width: 5%">id</th>
                                <th style="width: 15%">Name</th>
                                <th style="width: 15%">Email</th>
                                <th style="width: 15%">Phone Number</th>
                                <th style="width: 20%">Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop through the paginated data -->
                            @foreach ($datas as $data)
                                <tr>
                                    <td class="text-truncate">{{$data->id}}</td>
                                    <td class="text-wrap">{{$data->name}}</td>
                                    <td class="text-wrap">{{$data->email}}</td>
                                    <td class="text-wrap">{{$data->phone}}</td>
                                    <td class="text-wrap" style="white-space: normal; word-break: break-word;">{{$data->message}}</td>
                                    <td>
                                        <!-- Button to open the email modal, passing the correct email -->
                                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#sendEmailModal" 
                                           onclick="setEmailData('{{ $data->email }}')">Send Email</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        
                <div>
                    <!-- Pagination links -->
                    {{ $datas->links() }}
                </div>
            </div>
        </div>
        
        <!-- Modal for sending an email -->
        <div class="modal fade" id="sendEmailModal" tabindex="-1" aria-labelledby="sendEmailModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sendEmailModalLabel">Send Email to User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="sendEmailForm" method="POST" action="{{ route('send.email') }}">
                        @csrf
                        <div class="modal-body">
                            <!-- User's email -->
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">User Email</label>
                                <input type="email" id="userEmail" class="form-control" name="userEmail" readonly>
                            </div>
                    
                            <!-- Admin email from .env -->
                            <div class="mb-3">
                                <label for="adminEmail" class="form-label">Your Email</label>
                                <input type="email" id="adminEmail" class="form-control" name="adminEmail" value="{{ env('MAIL_USERNAME') }}" readonly>
                            </div>
                    
                            <!-- Message -->
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            // Set the email value to the modal input field
            function setEmailData(userEmail) {
                document.getElementById('userEmail').value = userEmail;
            }
        </script>
        
</body>
</html>
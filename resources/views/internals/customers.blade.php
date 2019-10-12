@extends('layout')

@section('title', 'Customers List')
    

@section('content')

    <div class="row">
        <div class="col-12">
            <h1> Customers</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="customers" method="POST">
        
                <div class="form-group">
                    <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Insert your name" value='{{old('name')}}' class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Insert your e-mail" value='{{old('email')}}' class="form-control">
                </div>

                <div>
                {{ $errors->first('name')}}
                {{ $errors->first('email')}}
                </div>

                <div class="form-group">
                    <label for="Active">Status</label>
                    <select id="active" name="active" class="form-control">
                        <option value="" disabled>Select Customer Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <button type="Submit" class="btn btn-primary">Add Customer</button>
                @csrf
            </form>
        </div>
    </div>



    <hr>

    <div class="row">
        
        <div class="col-6">
        <h3>Active Customers</h3>
            <ol>
                @foreach ($activeCustomers as $activeCustomer)
                    <li>Nome - {{ $activeCustomer->name }} <span class="text-muted"><br>Email - {{ $activeCustomer->email }}</span></li>
                @endforeach
            </ol>
        </div>

        <div class="col-6">
        <h3>Inactive Customers</h3>
            <ol>
                @foreach ($customers as $customer)    
                    <li>Nome - {{ $customer->name }} <span class="text-muted"><br>Email - {{ $customer->email }}</span></li>
                @foreach ($inactiveCustomers as $inactiveCustomer)
                    <li>Nome - {{ $inactiveCustomer->name }} <span class="text-muted"><br>Email - {{ $inactiveCustomer->email }}</span></li>
                @endforeach
            </ol>
        </div>
    </div>

@endsection


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('login') }}
        </h2>
    </x-slot>

    <div style="padding: 3%">

        <form action="/login" method="post">
            @csrf
        <img class="logo" alt="사진없어여" src="/image/HatchfulExport-All/logo_transparent.png">
    
        <!-- id -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" id="IDL">
                ID
            </label>
    
            <input type="id" name="id" class="form-control" id="IDI" placeholder="아이디를 입력 해 주세요">
        </div>
        <br>
        <!-- pw -->
        <div class="mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label" id="PWL">
                Password
            </label>
    
            <input type="password" name="password" class="form-control" id="PWI">
    
        </div>
    
        <div style="padding-top: 50px">
        </div>
    
        <button type="submit" class="btn btn-primary" id="signIn">SIGN IN</button>
        <input type="button" onclick="location.href='/findForm'" class="btn btn-primary" id="ahah" value="아이디/비밀번호찾기">
    </form>

    </div>

</x-app-layout>

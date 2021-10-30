<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    
                    메인페이지로 쓸랭, 여기는 마이페이지에요 하이~

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">사용자 이름</h5>

                              <p class="card-text">사용자 자기 소개</p>

                              <p class="card-text">주로 맡는 역할</p>
                              
                              <p class="card-text">연락처</p>

                            </div>
                          </div>
                        </div>
                      </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

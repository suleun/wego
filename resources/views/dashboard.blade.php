<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    
    <div class="py-12">

        <body class="font-mono bg-white">
            <!-- Container -->
            <div class="container mx-auto">
                <div class="flex justify-center px-6 my-12">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div
                            class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                            style="background-image: url('\public\storage\image\sosoeueunOctocat.png')"></div>
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <h3 class="pt-4 text-2xl text-center">{{ auth()->user()->name }}</h3>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="text">
                                        자기소개
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="text"
                                        type="text"
                                        placeholder="자유롭게 자신을 소개해 보세요!"/>
                                </div>
                                
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="text">
                                        기술
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="text"
                                        type="text"
                                        placeholder="자신이 사용할 수 있는 기술을 적어 주세요!"/>
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="text">
                                        연락처
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="text"
                                        type="text"
                                        placeholder="이메일 주소나, 깃허브 주소등 연락처를 적어주세요!"/>
                                </div>
                                
                                <div class="mb-6 text-center">
                                    <button
                                        class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                        type="button">
                                        저장
                                    </button>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- component -->
                
                </div>
            </div>

        </div>
    </div>
</div>
</div>

</x-app-layout>
<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <img
                        class="logo"
                        alt="WEGO"
                        src="/image/HatchfulExport-All/logo_transparent.png">

                        <form
                            class="card"
                            action="/projectStore"
                            method="post"
                            enctype="multipart/form-data"
                            onkeydown="return event.key !='Enter';">
                            @csrf
                            <div>
                                <!-- 프로젝트 명 -->
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">프로젝트 명</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="projectTitle"
                                        id="exampleFormControlInput1"
                                        placeholder="프로젝트 명을 입력해 주세요."></div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="peopleid">최대 참여 인원 선택</label>
                                        <select class="form-control" name="people" id="peopleid" onchange="peopleDiv()">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="add_people">
                                    <!-- 팀원추가 -->
                                    <label for="exampleFormControlInput1" onclick="team_email_Plus()">
                                        팀원추가
                                    </label>

                                    <div class="form-group" id="add_people"></div>

                                    <!-- component -->
                                    <div class="container mx-auto bg-white py-24 px-12 rounded-xl shadow-md">
                                        <div class="flex flex-col items-center w-full">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-gray-400 h-16 w-16"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                            </svg>
                                            <span class="text-xl text-gray-800">Assemble Teams</span>
                                            <span class="text-gray-600">You haven't added any team members to your squad yet.</span>
                                            <div class="flex flex-row w-full mt-4">
                                                <input
                                                    type="text"
                                                    class="rounded-md flex-grow border border-gray-400 focus:border-red-400">
                                                    <button
                                                        class="ml-4 px-4 rounded-black border-black border rounded-md bg-red-400 text-white border-0 hover:bg-red-600 transition-all ease-in-out">Send Invitation</button>
                                                </div>
                                                <span class="text-sm text-gray-600 mt-4 w-full align-left tracking-wider">RECOMMENDED TEAM MEMBERS</span>
                                                <div class="grid grid-cols-2 mt-4 w-full gap-4">
                                                    <div
                                                        class="flex flex-row rounded-full w-full border border-black p-2 gap-4 items-center">
                                                        <div class="flex-shrink w-12 h-12 bg-black rounded-full"></div>
                                                        <div class="flex-grow flex flex-col">
                                                            <span class="text-lg text-gray-800">Robert Downey Jr.</span>
                                                            <span class="text-base text-gray-600">Founder of Stark</span>
                                                        </div>
                                                        <div class="flex-shrink w-12 h-12 flex justify-center items-center">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="flex-shrink h-8 w-8"
                                                                fill="none"
                                                                viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 4v16m8-8H4"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex flex-row rounded-full w-full border border-black p-2 gap-4 items-center">
                                                        <div class="flex-shrink w-12 h-12 bg-black rounded-full"></div>
                                                        <div class="flex-grow flex flex-col">
                                                            <span class="text-lg text-gray-800">Benedict Cumberbatch</span>
                                                            <span class="text-base text-gray-600">Dr. Strange</span>
                                                        </div>
                                                        <div class="flex-shrink w-12 h-12 flex justify-center items-center">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="flex-shrink h-8 w-8"
                                                                fill="none"
                                                                viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 4v16m8-8H4"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <br>

                                        <div>
                                            <!-- 프로젝트 개요 -->
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">프로젝트 개요</label>
                                                <textarea
                                                    class="form-control"
                                                    name="outline"
                                                    id="exampleFormControlTextarea1"
                                                    rows="5"></textarea>
                                            </div>
                                            <br>
                                                <!-- 첨부파일 -->
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Example file input</label>
                                                    <input
                                                        type="file"
                                                        name="files[]"
                                                        class="form-control-file"
                                                        id="exampleFormControlFile1"></div>
                                                </div>

                                                <div>
                                                    <!-- 기대 효과 -->
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">기대효과</label>
                                                        <textarea
                                                            class="form-control"
                                                            name="expectation"
                                                            id="exampleFormControlTextarea1"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <br></div>
                                            </div>
                                        </div>
                                    </div>

                                </x-app-layout>

                                <script>

                                    function peopleDiv() {
                                        let num = $("select[name=people]").val();

                                        $('#add_people').empty();

                                        for (i = 0; i < num; i++) {

                                            let temp_html = `
                        <input
                            type="email"
                            class="form-control"
                            id="emailInput"
                            placeholder="팀원의 이메일 주소를 적어 주세요">
        
                        `;
                                            $('#add_people').append(temp_html)

                                        }

                                    }
                                </script>
            <br><br><br>
            <div class="card-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="green">
                                    <i class="material-icons">language</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">동요 합창 수업 </h4>
                                        <div class="col-md-5">
                                           
                                            <h3>상태 :<button class="btn btn-primary btn-xs">ACTION</button></h3>
                                            <h4>과목 : 음악 </h4>
                                            <h4>강의실 : 1020 </h4>
                                            <h4>시작시간 : 11:30 </h4>          
                                            <h4>종료시간 : 12:30 </h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>학년 : 초등3 </h4>
                                            <h4>수업요일 : 월 수  </h4>
                                            <h4>수강료 : 50000 </h4>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-success"><a href="<?php echo site_url('/program_addclient')?>">수강생 추가</a> </button>
                                            <button class="btn btn-danger">수업삭제</button>
                                            <button class="btn btn-success btn-lg"><a href="<?php echo site_url('/program_attendcheck')?>">출석체크</button>
                                        </div>
                                       
                                </div>
                            </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">수강생 목록 </h4>
                                        </div>
                                    <div class="card-content table-responsive table-full-width">
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>상태</th>
                                                    <th>출석</th>
                                                    <th>담당복지사</th>
                                                    <th>카테고리</th>
                                                    <th>사진</th>
                                                    <th>성명</th>
                                                    <th>연락처</th>
                                                    <th>결석률</th>
                                                    <th>출석시간</th>
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                                
                                                
                                                <tr>
                                                    <td>3</td>
                                                    <td>출석</td>
                                                    <td>노인에어로빅</td>
                                                    <td>장복지</td>
                                                    <td>생활체육</td>
                                                    <td>사진1</td>
                                                    <td>김할머니</td>
                                                    <td>010-1234-1234</td>
                                                    <td>10%</td>
                                                    <td>07:03</td>
                                                
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>출석</td>
                                                    <td>노인에어로빅</td>
                                                    <td>김복지</td>
                                                    <td>생활체육</td>
                                                    <td>사진1</td>
                                                    <td>김할머니</td>
                                                    <td>010-1234-1234</td>
                                                    <td>10%</td>
                                                    <td>07:03</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>출석</td>
                                                    <td>노인에어로빅</td>
                                                    <td>김복지</td>
                                                    <td>생활체육</td>
                                                    <td>사진1</td>
                                                    <td>이할머니</td>
                                                    <td>010-1234-1234</td>
                                                    <td>10%</td>
                                                    <td>07:03</td>
                                                </tr>  
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <button class="btn btn-danger">선택삭제</button>
                                 </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
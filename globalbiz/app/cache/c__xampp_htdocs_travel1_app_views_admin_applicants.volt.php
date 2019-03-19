<div class="pull-left"><a class="btn btn-sm btn-primary active" href="../Admin"><h5>Centre For Excellence Consultancy </h5></a></div>
<br><br><br>
<div id="maindiv" class="container-fluid">
    <center><?= $this->flash->output() ?></center>
    <div class="row">
        <div class="col-sm-6">
            <center><h1 class="badge">Applicant Details</h1></center>
            <center><h1 class="badge">Agent: <?= $agent ?></h1></center>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ul>
                            <li><label>Candidate Id:</label> <?= $candidateid ?></li>
                            <li><label>First Name:</label><?= $candidateFname ?></li>
                            <li><label>Last Name:</label><?= $candidateLname ?></li>
                            <li><label>Email:</label><?= $candidateEmail ?></li>
                            <li><label>Telephone:</label><?= $candidateTel ?></li>
                            <li><label>Country:</label><?= $candidateCountry ?></li>
                            <li><label>University:</label><?= $candidateUniv ?></li>
                            <li><label>Program:</label><?= $candidateProgram ?></li>
                            <li><label>Degree:</label><?= $candidateDegree ?></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <li><label>Status:</label><?= $candidateStatus ?></li>
                            <li><label>Address:</label><?= $candidateAdress ?></li>
                            <li><label>Father Name:</label><?= $candidateFatherNm ?></li>
                            <li><label>Mother Name:</label><?= $candidateMotherNm ?></li>
                            <li><label>Date application:</label><?= $candidateDateApp ?></li>
                            <li><label>Comments:</label><?= $candidateCcomments ?></li>
                            <li><label>Admin comments:</label><?= $candidateAcomments ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="col-sm-3">
            <center><h1 class="badge">Actions</h1></center>
        </div>
        <div class="col-sm-3">
            <center><h1 class="badge">Actions</h1></center>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-12">
            <div id="content">
                <a class="btn btn-info pull-right" onclick="ExcelReport();">Excel</a>
                <table class="table" id="table1" name="table1">
                    <thead class="bg-primary active">
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>University</th>
                    <th>Applied Program</th>
                    <th>Degree</th>
                    <th>Status</th>
                    <th>Application Date</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    <?php
                    $findcandidate = Candidate::find("status = 'New'");
                    if($findcandidate){
                    $count = 0;
                    foreach($findcandidate as $cand){
                    $count++;
                    echo"
                    <tr>
                        <td class='bg-primary responsive'>$count</td>
                        <td>$cand->fname</td>
                        <td>$cand->lname</td>
                        <td>$cand->email</td>
                        <td>$cand->tel</td>
                        <td>$cand->country</td>
                        <td>$cand->university</td>
                        <td>$cand->program</td>
                        <td>$cand->degree</td>
                        <td>$cand->status</td>
                        <td>$cand->dateapplication</td>
                        <td class='btn btn-danger active'><a href='../Admin/SingleApp/$cand->id'>Process</a></td>
                    </tr>
                    ";
                    }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
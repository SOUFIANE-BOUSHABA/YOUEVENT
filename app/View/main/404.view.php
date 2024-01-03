<?php
include_once(__DIR__ . "/../includes/head.php");
include_once(__DIR__ . "/../includes/header.php");
?>

<div style="height: 70vh;">
    <div>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mt-4">
                            <img class="mb-4" src="../../public\assets\img\error-404-monochrome.svg"  style="height: 300px;" />
                            <p class="lead  ">This requested URL was not found on this server.</p>
                            <a href="/YOUEVENT/user/home" class=" text-dark d-flex align-items-center justify-content-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H6M12 5l-7 7 7 7"/></svg>
                                Return to Homepage
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php
include_once(__DIR__ . "/../includes/footer.php");
?>
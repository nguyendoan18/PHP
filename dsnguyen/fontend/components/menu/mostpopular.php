<div class="p-b-30">
    <div class="how2 how2-cl4 flex-s-c">
        <h3 class="f1-m-2 cl3 tab01-title">
            Tin được xem nhiều nhất
        </h3>
    </div>
    <?php
        include '../admin/ketnoi.php';
        $sql = "SELECT * FROM dsnguyen_tintuc ORDER BY dsnguyen_view DESC limit 5";
        $kq = mysqli_query($ketnoi, $sql);		
    

        while($row = mysqli_fetch_array($kq)){?>
        <ul class="p-t-15">
            <li style="margin-bottom: 0px; padding-bottom: 0px" class="flex-wr-sb-s p-b-22">
                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                    <a <?php echo "href=\"blog-detail-01.php?id=".$row[0]."\""?>> <img style="width: 25px; height: 25px" src="../images/<?php echo $row[1]; ?>" alt=""></a>
                </div>

                <a <?php echo "href=\"blog-detail-01.php?id=".$row[0]."\""?> class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                    <?php echo $row[2]; ?>
                </a>
            </li>
        </ul>
        <?php }?>
</div>
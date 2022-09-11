<?php
session_start();
include("./databases/connect.php");

if (isset($_SESSION["admin_user"]) && isset($_SESSION["id_user"])) {
    if ($_SESSION["admin_user"] == 1) {
        $type = $_SESSION["admin_user"];
        $id = $_SESSION["id_user"];
    } else {
        $id = 0;
    }
} else {
    $id = 0;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sooq Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>

    <div class="header-blue">
      <?php include("./navbar.php")?>

        <div class="text-box">
            <h1>A One Stop Place For All Your Tech Needs!</h1>
            <p>WE HAVE OVER 20 YEARS OF EXPERIENCE</p>
            <button class="btn btn-light btn-lg action-button" type="button" >
                <a href="./shop.php" style="color: white;">Now Shop</a>
            </button>
        </div>

    </div>


    <section class="home_iphone">
        <h1>iPhone</h1>
        <div class="row_home_iphone">
            <div class="col_home_iphone">
                <h3>iPhone 13</h3>
                <img src="https://cdn.vatanbilgisayar.com/Upload/PRODUCT/apple/thumb/129876-1_large.jpg" />
            </div>
            <div class="col_home_iphone">
                <h3>iPhone 12</h3>
                <img src="https://specifications-pro.com/wp-content/uploads/2020/04/iPhone-12-2.jpg" />
            </div>
            <div class="col_home_iphone">
                <h3>iPhone 11</h3>
                <img src="https://khaleejitech.com/wp-content/uploads/2020/06/iphone11-black-select-2019.png" />
            </div>
            <div class="col_home_iphone">
                <h3>iPhone 10</h3>
                <img src="https://jawalplus.com/wp-content/uploads/2017/09/0008667_apple-iphone-x-a1901-256gb-silver_610.jpeg" />
            </div>
        </div>
    </section>
    <section class="home_iphone">
        <h1>Samsung</h1>
        <div class="row_home_iphone">
            <div class="col_home_iphone">
                <h3>samsung galaxy note 20</h3>
                <img src="https://images.samsung.com/is/image/samsung/assets/levant/smartphones/buy/shop/001-note20series-productimage-mo-720.jpg" />
            </div>
            <div class="col_home_iphone">
                <h3>samsung galaxy note 21</h3>
                <img src="https://specs-tech.com/wp-content/uploads/2021/01/Samsung-Galaxy-Note-21-2.jpg" />
            </div>
            <div class="col_home_iphone">
                <h3>samsung galaxy s20</h3>
                <img src="https://www.mytrendyphone.eu/images/Samsung-Galaxy-S20-FE-Duos-128GB-Cloud-Navy-8806090716935-02102020-01-p.jpg" />
            </div>
            <div class="col_home_iphone">
                <h3>samsung galaxy s20</h3>
                <img src="https://www.mytrendyphone.eu/images/Samsung-Galaxy-S20-FE-Duos-128GB-Cloud-Navy-8806090716935-02102020-01-p.jpg" />
            </div>
        </div>
    </section>
    <section class="home_iphone">
        <h1>Huawei </h1>
        <div class="row_home_iphone">
            <div class="col_home_iphone">
                <h3>huawei p40 pro</h3>
                <img src="https://specs1.com/wp-content/uploads/2020/03/Huawei-P40-Pro.jpg" />
            </div>
            <div class="col_home_iphone">
                <h3>huawei nova 7i</h3>
                <img src="https://mobizil.com/wp-content/uploads/2020/03/Huawei-Nova-7i.jpg" />
            </div>
            <div class="col_home_iphone">
                <h3>huawei y9a</h3>
                <img src="https://www.mobezone.com/wp-content/uploads/2020/09/Huawei-Y9a.jpg" />
            </div>
            <div class="col_home_iphone">
                <h3>huawei nova 3i</h3>
                <img src="https://mobizil.com/wp-content/uploads/2018/07/huawei-nova-3i-1.jpg" />
            </div>
        </div>
    </section>
    <section class="home_iphone">
        <h1>Company </h1>
        <div class="row_home_iphone">
            <div class="col_home_iphone">
                <h3>iPhone</h3>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqP4Y_vyYdpjrkAuzRqlCnPOGG9lSPV6DBji63exb_-MYQOfjSmSf6WJACN6CQnNCkgAI&usqp=CAU" />
            </div>
            <div class="col_home_iphone">
                <h3>Samsung</h3>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYYAAACBCAMAAADzLO3bAAAAolBMVEUDTqL///8ATKEAPpwARp8AS6EAQ54ASaAAQJ0ARJ4AQZ3Q3OwAPJsASKAAVKYAOpvz9vrp7/aInce4y+MrZq6as9V1l8bW4/Cmvdo4bbLw9PkaWqjA0ebh6PLy9vppjcGyxd+SrNFFdrZYgLoRV6fK1+mbstSCnclxk8RhiL6quNarwNyUqc4eYKxTfLi9zeM9cbMAJpWFps8ALZcANJhWhb7AzQSQAAAT4klEQVR4nO2daYOiPLOGNUBYZB1xQaVFFJdR1OM7z///a4c1qbCo0Hbbi/enGRow5EqqKpUEOt2Xul3TGvVm/f3fv+vDn81wO98tl0ff98+OY+dy/ONuPtwc1n/3nncKRtbbIwvQeeTNvo/iavfG6z/b5TnsYMNQVUlSFCzzMq9pmigKmRCVIIjRn3hZxliRJE41DHnlHLeH9f7Uc99bnt+EwQ28wWG4dEIhqncurnVZE+Oq7rRThEbUIioxk44zP4xnrXH8eAymOTqND8Oj3YlavIL5qOLbVvtVCSKPFQOHx81gZplNS/ljMZiTnrfY7BydU6Wk8j+i7ktCCQ1VPw8HvSYsfhyGN6u3X2yWji6pSmToP6bp36bBY050toPR5L5S/xwMb9Zof5n7U4mLPO0HWZ6GLDSsdvxNcAeKH4DBtNzTYnu0Ead8iepnJcicvhyMblio743BGnmx/VEU+aM87yOERIzt4exap/iuGN7cYLE7r7Aif+H6p4qchRLOZ7VDvm+IIfLBQz9EkiyK3wAAFdKkcDOqfqbvhcEN1v/Zuhz5gNZjrqcK8eLZq3qwb4PBna2XYQfjJ4WgjxISldWlPNj+DhhiAlMBy9rnDME+WkjW5kUQXxzDW7A+6hqWv6kRqhHS8Jz11l8Yw8gbhnEk9KMIZEK8MIbP+jUxmLODr3Df3Q9cFeLOFn3gr4fB3Q9DI4pGfy6BTJq8Jw/9tTCMBnPdwD/EFd+WOs8f/Otg6K13nQjBj+8EUNjPck1fAoPZWyw7qqw9u1Y+X7yTZpqejuEtRSA+u0KeJP5sPh2D6Y7nU+7XIkgkL5+LwQo2Dv5lvqBK3OJ5GNzBcsXxP3hYcL+QNHoKBisYOjz++eOCeyWePx+DO15OlVc3YKQGn4rBDC6O8PIGJYn+52Gw+rupzL9MUZWMyedgsPY+enWDWineJ2Bw/zoa/tVjg1sStx+NwV3bCn555OtCzodiiBgY+LekS98htPo4DNaLQQN9FANHfTG4Vx/TG8y9z70YNBCyH47BnM015RUXNZK4ezAGdxNyv3D25p2S14/EMBn7HP+KTZuL6z0MgxnMOy9j1E7io3JK7sJWXsmKlpI3D8FgnpbCKzJqL9V9AIaoIwjhtIM5zD8HhaDJiqQaBqfgT57IQKIscYZhxHtN2+eOtd0Dpn1GI2vyZr5NJu5+E6pVzkHiiiqWmC/8XaEPWryYL9YEb4TbhRdYE6s3G298vtgt6b3l7IhIjmBwnsL8jCSUjkvFUovcaj44jSaWZQX7w1FUWrZCzn307FtwNEqNQgp6BY109iT+MmJPOOl5JXcKF4/+sBxEvOkxJZgMQszce0PuPUg5iDtyxJPJefqJ+Z3AzupUJwUI2J4mqLuA+WVz73BtKMjD7rswuFV76jylwAHp5ZOWbKfB++IJeSUIYfEvf5lKlo4Vr0e4qKAIeECOn6QUzJAcGUm0lBZ7k02Gm5beZMwOH1Zsn/JamGWkx0vsW2PoHau3cfUwy0Fbls85yMwpZQxHse7isQIulC6VRTgBqwcw9JtgCNTsL2QnLYOBP1b+sqs35mD04wtbYpid/69X86c92zXldfmUvsScopS2gw2ztigfSncHvUHe1hRhQU9qi+EtNZxIrMQg2DW/7OKGnhqnz9AKgzfllOqGGMthWoR0IkWckX8ZLIZ+/odJ1sPyys7/YpFKAhjKFotoRSqjLYbuLsnJIL4Sg1H7qpgx28JuScx4tsDghZyAOOgYrBHcQrRmzLdBns+l5NhYiZKysn7Ry6yWnHW5PXlsjxolhdkvw1YGKUJrDOktEK7CwG9qf7k7bdIdhE72YI0xxBAiisBo96aGaszp/y0V/BDC5PhsR/5Z6DCkm1jZ87lpqIS0DO+GYOgD30BbgjmX/yHQP11Sv60xWGl2TKrCoAK3aK23f/rgukMxpL4iJOfBVkMMns0lNYipxZ/osT/laAMxGd5ncnxB/7lhyiqRyG+SnxKmlnmV/XdJMZCaE3xarGUUnyGV1m+X+KfmGHKf5ycPqlZggMHfScKabICiBA2iVkycYiMMOQRoR7oel9YYfTmHDdq6/Icc3k6J6dozdosj3n6SP2BaB2IWj0xsUkknUnMaddDWv0JVUtPQHEPeni5JUzEqMABTYK6SgnK0VZr3Y2i36YpCYLplZocVigGaHBCMLjXa4qDd6nDkZhMua/bDxEHymZ1x6ZUzUnMy7X/pQSRSx/kODH8yE9mT6jDwtGllcS3o82/6vc5BBr7tbgwnhwO1CzDM0pIY1RhoFb/ZBr2ICZXozaz/ZfYpHaXlkexJIZUUUAy0gq3kdkh4CIZD9ve3MH4MGmEADDSMztqg4NCKsu8cOmAYYdyJIThzzN054KTOfHrEchNZLiwIR+uqI9HxQQjvppLqs/6X9e4gCZVwZq0uPMVA+jwMV5Y4wdCbZDLfgWGNsn/M4x6pVmAA92yNAcl/Yf3ehcHdSYWcHRz4Wk48ZgGvygS9EoxzXI6nscwczpTSR7X+ZRGX24lvImXOZKcRUD2CAfiG7ts5TryhaZiLFrQxhr95p03Op03kKgbbIroLgyDC6OouDJONUArCZDh6exvGayOrKMC68hSRRrXM2MIgkaf1LzeycXNGWeFMh1r9EfEqImiBkWPFWmUR2mDIeqSl342h05kS3QGho03ZtOAdGMZTuXwfNGXOCXypug2AwPbCgxBzBgeb1K24xjSrjti/iNn5lkit/ogGIgozlO35XFURWmCQcr5xZov6resYKhthnfC5OEq5hSFwqufVpEIeqG9XgqAjs8gOoSlp9hPoo2ls7qr8KD+bRiQ9jmJwaYzFF1JKfaeiCM0xjJXcBMZdlgbT1zE0EOLAWDfTdQzWvG4pNkLFF5aNpxVFAvGTLyCZNgIY1kkAQx4cxaFS7oAGmGKwKD+ECz27uw+VYgGaY9jj/HdH0UD6DgxIYHSrOwgqvZzoKoa9Xr/eRXOKZ5sLvrhEiQyDo/Y/hc9EUtkdJn0WufEs/plhOroe8mIVho6gF3Pt5losuLE2GPJRY2wZ6Qi/DgPSHUY3xg28XpWavoLB9a9mbXmn9FJLa8mmTpNp1vxvChMqg9QLSCa7al4Fo6hVGVmH80UaKb3BXxA6pTkPa86mDZtjiJOHmfEc8ndggEmVWFcjJcQdK18FWo9hXGrbBWmr8sRPn/UkYL4gDvjBwBdkSjuIlGykCnZa96aOkJwenOiIYjAZ0AJm476kCCK0o60w4CxVEygdhTi3Wgx0BJ3oGgbBqJh9iVWHYeLfzo0IxqJ0nTWF8OhMQmTgI3DUN4EpB6QDDGQobAv587kq4mlQxPY3ZJTdnWUDw9QcQ18h5bSmiCbP3o8BKXbdPEUNhv59u6SUsOglo0E14EBTAUlSFQ42qdcBDiQaFeSx1U7M3cQe12OIarU8hdo908K3wCDRcHwpSqQhvRuDoCxKJc1VjWFbfNg6CdyyCHiyAuWgh+PZLKTTKYIzOQuMQaIxspyVdS3n0zobGcn1GKKY0im1Beomm2OIc7j5PMBeoRO07/QNCNs172CNVYVhFDaIhkVlU1ihQdM+Ii2hmZSOY3tHhpJOZkYYcq9+wnm/WIodTDGo5SIIRrEt0AxucwwzhearXCTdxIBsr98HLqoSA+I7NV4hVQWGfeVwtFZIFgq/QNa/gIzwJLknGM3RgQ/IO0UYhCwAG2mZRTNDBDEUF+AkErkh2xZIEVpgkECRHI6YvPpxg6JIcvVsC3lEeV4cN7MqYTB36j3jcZjIi1wPYxZIFAQC1HT0Cx6A5uiAx4gP6mmVm3mgZEXHAAbgU2ARZJ0Z1pO50uYY4lQ60jIDcjHII1wdRevXMCClbDYLKmJwnYoMUgUFQcwVDxsFvAD3mORPB9Lhab2A5LRJFiMWMORjvGl2+KQw6SOhoghxBSFuDiJykixpgSFuH3kurPd+DIjXr9qjRAUMweq+LQr6KJebTMQgFWT/zWx9ChgedxcJXTCco8UFoUZ8r/whj1t6JcBAvK9yckkZkp6F4dqy3Ha1mIuOb5b7XVMn17fEIPLD6/YoEYuhf+cncOCkeLYQQ6VGwcxKAuPTdFZTsGlx5zlwEGrEGPLc+GVNz5MoBrIESQVuOW370qJbOq0lhk6+cmVJWnIrDKJUs7ixIAbD/t4tUxUYSlEROzHjZ2SK/aNDJ/67KYacyr5PH4urmN4sY8hH4LHyTiM3xpDOaCiZa/YW5KkIBrAQkQQalRgEyS6P8isFMQzke2ezKzCAsDPHAIqbz0qCuiNrLMBChzhKQdmUQ5C56jixBTCQ6VOI4V9aqint/nlJ82FItwpDrxJD0hvy1bMuuR5goCmafRoKgBGoSQqIlLA8sqwRwLBukjunl+UYqAXKFyeA8DT32nRQSleVAYeRzAYVpnNUtspJYwN376Y5SNgb/mVngYnXUdpnFNo4ZiSxBTCkMR1aZQcqckoa6E9pWMnTRzCzTDdSVoP7PzlG67PRDIYBVsyl+DEMgrKKoifl4SnsILn5BpmmpF7YlcVxLgpiIMs+4MqGXWLgZHojkg8HE69dJx4ximA1k0ceuYQB5PTy8ooVoV13Y4iCwGvUAWQUsb5u9d03rzRjck2wkPHCNU2iM2v5IhYhpAXJGTPLKfLV8wBDfKXMrBBNRtsAA0mCgDbZnYSqLHMhrWDSzuGMteUYkgFngelIHmDICGrF5eJg8SQHatg7hvYQ9N9BMqDTF80+hJhjmDVbEQ7Gx1HBD/PtGPxsNpcAo9N8RwNwx9184w544MRfiMymhqTawQDEJwGWDZ+0fzhAb0gqGGYFo5KyX+2kC78BhknZ3ycCGHD9IubuUURKp1FPiJVhGDXdVi5euWfmpIBZzpapR497vYckGNgKSGodYKDTdtKVKIRGK1dWX8/AHjuKIZ9YkgqzZABDYUEEVGAo+hVIdcow2E03lsv1+xv2mWuANj53rAisscxn90HPSjDAKetsXgLMntINW1f2Nyygn6vdiwDWrAEM+cRSkR/c34CHxXvlJwmru6MjqBTD7q4MBiOjLk3i5vYAGHSTbF0H7dpEJQxpTAljoNRlAQw7Op0hl6d8UvXgRGh50jzTBjw0XIacYSjOIzCbroyKaf1Ik+2p8vhNJRi8e6cXgFANB7L9C62obaET+bCLZN4WLPpOM08g1s/8DMAA1/tJ1buuAtbCytXTvxcYk1RggJMcsdgtiEbVT5vv+l601epVF6hiCjSySHLe06E3BuuwwUWbtEbBytxTUjUwSEltELDTQzjJiu3yMoe3S3EHMz8te5HAZ+Nz3e2aqcjEEl7kh5LDFrv0hdfHTf3wFcUYdg02qEDh6ZrNWpke2BqMnD9ER2KFhTM9mic4fHJkl1Q6mtJz0pGgNicH2I1Conr0mNoYXfRyzCdwzgCW1B07XLHpqUYuckg2oIr5f6Sg+Xhkxr9umuy2s1YYghYmKXs8LB8P+1GyiNrtL5YdZtkc4onAYaF8lB4SS1fmQ7yqWyUSJexvBvtZEHjjyzyseZOQiFVnexns94PLZjd91PvnNKzilWOH4X8tXQLEcH5HmZDIY87AHd5QpWd9hwEJvIwlSVIU/tpXgUSNxxjLPP/YN92InF73oc9GGHqtOwPQL32HT9Rt/fGdH0i/gWH3ehdVO1374m1zDKX3ubx0j0SsLfvv88sQA91a+dLdQrzqLFoPEqowXFpGq79XSIu8ct0bQ9pi8F9vZ2skAeNd/4EDtwzD6uUa7pcgq+f1IyKjEgb99o+/lIpXw4c6BIjh1RnuUuQQhEc7BIjhZZRuC/ESnhfnph+LwXlhuCok8Liz+VAGMYbt683m9UKCLE8vH2eLKAavxc7e3yEkYsFZPyhbcQuD9YjM3s8T0rB+3H9QXFSBga44eSmXwMvh/PQR44N6DKeKbUy/WEhTOs6l9/Bx8i0McN/kb5fAK+HO+zRTxGAYlV4C/islaJLgX3qfaYoYDN3FK9ctYsnePqMbAAzd469Odou81Fku3rm04hEY3pxfOoaLhsgK52xmz7FERQzsayZ+iVDUC5Tzxrtjg+DHK1tKPPF/1WA6GiCr2vEw++SwtF5km8n2twwfIjtkrObrT0gUNRDddOXden/S91f8SSTV/iJ2iBHcS3i86zUN31NIiFc6Hte33prwJDH7oj3UfJ/D1xeKOoGihEPvc5KlrcS+JcC8aD8qZELxGlut469nTx0V3Fbx1SXWBjX9PM3XVNwHsLjyL6cv3AmIyu9TmixWyud+TPDBQij+LiKaHg/fgkCiype8eWf+e35wODZCCq/bu3XwbQgkqnnlYW8Yfq8v3iZdQEKhP/R6Xy8evana97C+nXZT5UkfW22kqAdoWBJCfz4I3C/uiWt17eXQk2Bo42ft4blDSIgAcGJ43EYAnp6de5duvLHeHC2OSPrk7//eVlT/ssIJ4XH47QGkuuMzGtZs44ucrH0FFkI0DpBUZC+HC29k/QQAqe78ts8kWMxtLD2LRWR+4m2GasdebgYnd/JlMqOPUoMPjpmT2WJ77qjKez4V3rj649rndGe5WewD6+fVf6bGH6M0rdlgc5xyqhJ1jY8IpGLHGzd9TlWF8Dw/DPrpHvAfrbbfizZH3mHuh4KhcgqW+chYte8g8QttRU3jsSKpBqfb/vzPetzvPW+C/vP17o/Yu0F/fBgunZVkqConSUq6BVwTBQFVSxDiOpdlrCgKF78jAXemjv/f8LD2ZqOf43Ub6d0YqEx31AtmfW//d33YbHdL37Gr5PjH3XZzOfz9u+8HPdf68QbnHv0/AbCT2nGG0WcAAAAASUVORK5CYII=" />
            </div>
            <div class="col_home_iphone">
                <h3>Huawei</h3>
                <img src="data:image/png;base64,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" />
            </div>
        </div>
    </section>
    <?php include("./footer.php") ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>
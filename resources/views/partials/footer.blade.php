<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/styling/style.css">
</head>
<body>
    <footer class="pt-2">

        <div class = "d-flex justify-content-around">
            <div class = "ms-5 text-center">
                <p>{{__('footer.call')}}</p>
                <div class = " justify-content-center d-flex">
                    <img src="https://www.freeiconspng.com/thumbs/phone-icon/office-phone-icon--25.png" class = "width_30px" alt="">
                    <p>1-234-567-89</p>
                </div>
            </div>
            <div class = "me-5 text-center">
                <p>{{__('footer.join')}}</p>
                <div class = " justify-content-center d-flex">
                    <img src ="https://cdn1.iconfinder.com/data/icons/logotypes/32/circle-facebook_-512.png" class = "width_30px">
                    <img src ="https://www.libd.org/wp-content/uploads/2017/03/twitter-icon.png" class = "width_30px">
                    <img src ="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/2560px-Gmail_icon_%282020%29.svg.png" class = "width_30px">
                    <img src ="https://cdn.icon-icons.com/icons2/1211/PNG/512/1491579602-yumminkysocialmedia36_83067.png" class = "width_30px">
                </div>
            </div>
        </div>

        <div class = "d-flex justify-content-around margin_top_50px px-5">
            <div class = "d-flex justify-content-between ">
                <div class = "mx-5">
                    <p>{{__('footer.company')}}</p>
                    <p>{{__('footer.about')}}</p>
                    <p>{{__('footer.donate')}}</p>
                    <p>{{__('footer.careers')}}</p>
                    <p>{{__('footer.affiliate')}}</p>
                    <p>{{__('footer.press')}}</p>
                    <p>{{__('footer.contact')}}</p>
                </div>
                <div class = "">
                    <p>{{__('footer.resources')}}</p>
                    <p>{{__('footer.blog')}}</p>
                    <p>{{__('footer.help')}}</p>
                    <p>{{__('footer.promotions')}}</p>
                    <p>{{__('footer.privacy')}}</p>
                    <p>{{__('footer.terms')}}</p>
                    <p>{{__('footer.site')}}</p>

                </div>
            </div>
            <div class = " top-50 text-center">
                <p>{{__('footer.donwload')}}</p>
                <div class = "margin_top_min_10px justify-content-center d-flex">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAXkAAACGCAMAAAAPbgp3AAAAk1BMVEUDBwj///8AAAADCAj29vZjZGRcXl3u7u4AAAP//v8ABAVMTU29vr77+/vr6+siIyPR0tFAQ0QTFBbl5eW0trWsrayCg4Lg4ODHyMiHiYh0dXXc3NyampqPj5A6Ozt9fX1pampRUlKXl5fLzcyhoaGur68mJyctLi4ZGhpnaGcsLi3CwsJPUFA8PT1YWFg0NTYdHh970gDQAAAV/UlEQVR4nO1dCXuiPBCGCYqiUBVPvK/W1lb7/3/dl5kkQACtCNr9dpnn2a5yJPBmMpkzGqYky7a88WT9woyKHkHsZT0/ehxlBbihPrijyQcAOL/9hH8tNTi6r5ORm0J+xgBYxfCPJGYANDYJ5P0WwG8/2D9BAC3fbEbIT3sV7s8i6HUinp9WDP9EAugI5Jumf4BKwD+RoIcCB3m+VQH/XIIW8rzl7ipR82RiMHMtwx6xCvlnE7CRbVjzCvjnE0wsw3urkH8+watnjKvl9TcIjkYlbH6FYG6cKuR/g2BtvFbI/wY1Xh7RKiA9ouGKrhDjoJ8n7VG9gv65BHCYjNAfFFTI/0Rl6pQOsI1lkvu5Qv4GKg17gMBWEZdVhfzzCFjbDKkFpc6miq4QsFEEvPtR8fyzCF5tM4yrm36VxPAsApiaMepXLP8kcuAYB75aYJ9GMNGAt6Fx443slxdiTDH6P6sC8GZpyM9+i+VzZ8kVTatjzu96SqCtAW/leRgHFN06Ty4Sg8/VysiDJLRWq+8i/TYOq1Xr96CHLw14c54j2gK9xXoVLJdBrVuce3C1yeV8hb5pdov0iq/e/kXk+xrwuRKnYNxUNoDdrhfEHufeSy7kB4j8PYJesgksflORg54m5d1FrnfvcOnkTzsjG0egk+vedGP3IX9PT706uWN/GfmVxvL5nGUceZeRmG/NbD4IhYTm05CHhW0O/gDkB3HgN/mSwRF51C9woUXHjyWRE42kdb74V9kRCw//hHz0ZCx69JuQZ/oX6JrmDqWUQD7Z7JPIERmaoUKZU61D5OUtgMgd6RvTQlvQcOQ7NZQi4oDj8G+OCMbIFiLkmbjdMdQACvUphF5MsyzkHdkvXelQf7GW1DWEfAMcXGE5zzt6GM6JHumR1AA/rtbk7DCOvAEHWyCBavJHMAwWNB1YBK16QZoiWIbB/y2CpUz/j5AH+F4N8TDI+1h9uazhV5oh/ENtGLxBCnmUesFw9Q3Ex1LjfQmW9TiS/DAHfEDniOcB6sMVk31h460l3vFoKURwCfJbkHfGacgbMENeQgBWwvPpLfkL9FBfotN8RRmGGC9gzI+f6EKvBkYMeViLeWjNEGsGKzkt9464u7enr52XBPIAG6EtdNb4JjA3TXgbk94wjD3lXr1wX/D8nG4ayOGXX93Zo6EPkbdiXd0MfwL5Fn9pnLy4dHTGiFebszX/n5pG9XVMH8BD5bVvjuq8Xw97R1VDIU/OjOmx4/K/mDYKI9Petsc2Ns77gm8crWnHNr12HHkGvSlvrnPESYwjDEM+vjbXvVxtAeNPhwdc19wj8nv+sD6CfRSPxkdquu/7D1p6Y8gKpdLaTnpKEuRpKIE8c02PS0/O+lMuaaDr4xxAINEHBwwxxl5whObAec+yrHcGH9yC4rdJ5BkEpmmv+e3fW9Pc4vFgSYJ9TJoXLUxjLmqAipYi5OnEHiUOams13tCSY2ryFzvs+IEw5tA4fPP+B+zl5YDShqs5r8D4peY7iAkRYGd8PJZlQh/a+hG+cKrVF7R+xc/fKOZ05B2w0fdwRg8/cSfjo/qF3/f4UnWzMxVjMENjFV/S+iBZP6LXFshDz0ajwpG+6wCU3QOGyweCBqaDzdOQxpDHr3080UDofc4B/EreH3awF2JQUANZfafkPNcqkIY4H5ngCUeUhpQWpqAFZ72c7Qaz5VeoAQg1oiHP91azY2c67bRnwU1VnnHkGZ/vhPwgtApQ0g4QwBEitTd3ezTWGb9rJDSTHa2Z+NqzEPlliBLUhIBhUtfpmDb9lXA3uNCKkHe4qmBJ5wNew9dIGiP6vsDZEz11V3aBxz0xrGChj5ZLQP7d4YTjWI5Lh+N63kTxD+sYHGLI0qt9zbT4iDdY/4h9QtrQ43M8LOk/gzcX2X9HTMyH5RTgyOCauxHIi8Qe+CSpKpEfh3A6CK3gQKe7msw5tD10rE6VrhT32yCKY6XHLmnEA+qHGsJJED11HPm2vGKKxgjvsC+n/LocccPl5Glr6mSho0W8A5bZzqdmiqbLH4ROAvkPVGO+XclpQmW1vuFEsrPFUf9wuQBGRLoCecFViEQ7RH4UeUtxFL74icVeqQEHREStfZpWiSJG+bexwTH1MxF2EmeJS8jLxmCLyJ9d0x6NfN/nf1DuFICciOvXQrlKkrdbiAEOxjIK22w2tSv801XsE8gHKNH500veY8RJXKLbyEk7rj3w7wNSaqQd9BlDnknkuc4iu2TI1J9c/vCHG/U3wynyfC0S2Si+I+SHiLP8/EprQRAeuQ35VyqBiqg48oDy9gL5g2CSOSqK9tegTyA/Rp3iLeJ5Bxn4G6HmMsdHxp/jJ09o/Rd43uMSS5nFpDZy1dNHJzT/xpGvm8LnYiR5fhk5uHFR315HPum34ci7rzQkxveLJFZ0hQVICppcdK3QWbdhW6TU8Lf0lCA+WKRkcEHw2qUxeOPioysQv4T81HRVJQwqPT08QCsnHBH5Vkyca3L+FBNDK+KYnDzPe+GLiJLzJXgQ4NW/iqx79Swn+3wRet1v49OihIqFQJQ0QFw6+QIXTNBUYRzLyRJHg11EfqcsXQpcTOFAc4jRlOLIc6XT6slVcRRHvufi8h4OyeoenucteuEcL+pAg7frwP9ITdPrXQo/EPINgft5KrgRX3gLDTUWWFzBX2twVKr8cS8Z7gLynKm9BhCybYROSS+cQBxzRHVGGjFZTDF9vq0kM3T5IPSuIH+WKk0a+VnkvHKKsTwDKAg8UufSxBNeYqTzgM+dDhr7xIrCUGkrm3xi+raJo8FBtn0B+AXkCe8x3c5h4EsxX3LND2nDct2GrB8yM0+WFde5cYa4K/KReTRtLiMPLmm3kEaeX8hvla7RQtA7cHX5vJU2FxItOfLNzrF97JDWt5OG8Bv/NpoHG1vFFlHfEVzWwGERy8AF5IXpau8CVHNtLvHRS2BNVnPP7JDAJ9N1NNh1TIsz/TqajmSzjofB3pSOu0vII8ymv+vXU8gbsHbx1GSyG/M5ere8YcRtzauY3kSDS4tsLDfN332RiMFO39SSPmhIf+1U5k8xxHsvPu0Rtwh5hhFw8pgZKjJ8fAO08UQelhusSLgwmIilyftcKFtMPk1Nzm+bXJOIvFQMAdeACEf4In/kJIyAM7SrzVfsrRW+Up5UgDQy3HQpjLz1fkmxZFCfzHaD3W6+OivvOXULrd14256/hSbRernsCaPtvFyexdTgx4S1Dy/oEOeNyYvQ3D5uj7MvEEMEtf72OH+Bj+UStR4G3/Pjts+tvO/hMlr9KYCy2o+3/cARk2qxXMoAOQRLLcwJr7vtuN+C7+XypDwVy6AnIjUn/uzj/qRbSLcpQ9Z4l1UbI+Zi0/JeVBqODFDRdY3ojuxPUQhFNStDhbI1dZn04pDTTOcJpnv7lB9QfMx4btokKzriaM9eDPhTCcD/HJRm4Z/MM0YqDTB1Lcs+HL8is5NkqznFw5WHKpg3qMVY7yOryqW/gxJuiLuoqnW+h6KI4920qzZWuIMcrsUWVGy820JTFWnESlhfJxXw95CePXYP2WVFIv8xgowoUz7awZ9ak/FnPpUk9O0VpDtCwCxn3khu0mylP5MwYlmM7Nwv+GhY0ChdtFqtc+9PBp9cd4Vomxv41vZ4PI4fVACD6ZrDsU0JYvZ09/mnLkLsSvD1RhrkRl4YEPtHII/emokmP7dx6P+kUSiu2uSNvTdAJGd4jUfYX6lw8lE9Hvq4Dn8Q9In6pzsob6YPZmQQ1R+AvEr09/uzza6NjnhVMO1Aazb9k+rWE8WWd1DOWnBKjzExjPEIGDAybpqjllzEX2Zh2iPNhV8s8UtRceRzbjAEjEqlzJwltTc2/ooyXhUusrhr/i9EPqfvgAubpjnGGLJZ/kZoYoeAr5hpFyVY/X3I5yvDx+y8Jh+tcQqHn4re2IXP2tugFJtmBuKhE/ZYbHkpa3Eqjnw+PnIANe0uMacubhxoyNq0ZJAQqQENRz+ZhQC5Qo7pB0K9RvB8MiTpZLaHhWmJCrpUFLEoFdcqR7lsFVjhL0AAZXjElwhMW3Ecg5KxD+vlfPL+BvGz/DzV5ABrLSeT1SI7AErIp007B6OygucZ/8hUFSJiuVhNJsPamwYoXsRvcoDVJ/MwiRCgG0zmy88elKKUweYHYH8k9/a6YCbn2ACcJHcyCGzP3vMT3bawhNxOLUxUgJbteVgK8rr3RK/ZqePE2FZqXwvY8dtxqC2PiJIZMGb+tlMZXtN51B58eZ595EjP0fKQqxG87mTX9qCU2Ccm1xakPMqNKHX7BCoUwWSw6Ay6MbagcUI7zA/A/S48gCBmnm4P6X65Utlspm275MQWbMz7imeL2u+hArpwSUESGTwnkXu1jHXtlrGrEuY7F6Q8jhvClwrNvhODRvmPHelZUIh0DJkJ80a3zbWTGdvqYzZUE427RPZGwlykG4EJa9e1PQlqWNKAW/mMVJS0TrmINHau3xF5cmUUisDXj1nCP9LNPyzAKENM1D2R3I2JGzJtp0MO3HTZWrSGImzQluUqB0Qar/Dn/GQgMMtYYaTC0O9p6wDUNvM5ypXpnOjQQC4ma9eeLBgcTuI2leX3gsh3aXQ7o5NIseUDusfCMfZOAqrQvi2iF7DNorS/ecUR0YCuzF81ZQmsOIVRScs13aXUIMTmXWJWYNGU6VqqRA/gnfglFXln0BCC2x2ctdJGTbfh6wCTfjtKisVMJuGylXmEiLzPeaTTEqoMrOVMIgWAL1HNy+m7txIrISZ1OwNQqjxnVUreJu0mmrUqUHCSq6ojViCZ18rEyWGY4UVCMiPNB17VlprjQOf7SJ+PuuuokZe9iao2VXfdpwJAkffcjHZ7gLMVDlIRQglWNKmyA85tXE8GFOXFM+HbGkdQfFJTMbtMSA5azLCqQQOOqmVVUZ/eBSNmxkouPy7vk8hTRmMsJVEcONHmHgL5kdIeaQnyY9Ozb5bhdSoeGslGILMvFBoqeojFYmFtqkq4sp3I8qcceLEUNATyrxCm71EOe1rSY7ktfCLIJI5GscR5DXlasjFEEGV3d8OxxYoTk8qeJfI4KMPYIOGE8wrvySaUjKJ0m5pFU1p5D2nVjF5IIK+FSwgszwCFfEc7SaydaUtw7PtSXXFDcZZAfhjjASJhYVgkygn5MItILE7fgDY2kiNWnWJbU1HDJZSLmO5N+X20ym2UEU6sFIaMBPKatka6Pb2hQF77JTixy1R2t2ibDn2dJxLIoyTTI8hCccTeBPKh3kVLgg9xwglV3N9X3H9A0K9uqMJ/s7j0HWxmgjZjFMdK3AjktdcRMZR1iHxswnNwz8lD0TnhcRmKjVCkLE8gjwyuzSEpdmsh8mqcaU8K0/XihFcW334/jBEVpPmPrqRMe3moljFCXuNhIXprmchz1c81r4YiHVgQQlGhTRx5PKW71oS6FITIh01fcLCUgHyvuEZPtH27ij3LThfvaDyvI09s/X4BeZK+V4PAWDBoqupMDXlG67Ounog0x2UG8tlC4b0EM7awo1iSdXWHIyY0GztGJA6kBZyFfHjoAs83r4dlmMCslUbeAE2Si0M097N4HiOM01MtQbk2EMymxI6IRci+snsqA3QNWGdgDhEXxe9m9IZZcp4erBtHPl4/hnbIdcYTbCzNYF3Oo72VkPNLNc5J5NFdNIUU3YrvZXJKcCBIumpT07tvtYe3o3sE8lqNIzEbbbEokNdEi1gQr1VnKXG1zEIe/UeW5mgXaup3BvKB+ZCgsSHfsBS6NvmF1I2uwGgFNwabUjEWyOvgogJCBr1AXpPLUi+8as6IzZRXaeRlgldctolibD+ypObhtdTKI1LiGDfoSiiHxckfs0DTMNDLvmhsRp6oTQz5+KQRR2aRDWtrJZ2umRmJDMvcmBIgX1ly/gt7PsarX0nM79LIi3J1uVdo2RlC5ZSAXw/JCj+NLlqFnBvFkCcdksmTkWtFeg9iM0LM0/ekszIR2cVJI818aq0ToUl6VlgbzmibNNlbAnkmfEQPyQMtS6W/5r8TnpKEOBKylTyOEnnrO9wwdBINpkTeXcuTDbH4TpPLCtQ/wgC3A2J01HZn2JUd/iy3eGVfla2DUIOEPEtIG+E1Nv2X+C54hTfSVw2V4Cr+aX2VwkY/SMrHLIa8adfk6kuMJvasUchHzntyu6TZkHPy/lMt3x+kLdsSXDGQG6WVMKFL+2d5MbGA1xMbteg8L+51qcpdUbcEnVI0XYbD8prbjDFpr+tjA2RLksdRIE+5A8PWV30j3C6BkOwCeWphvv46yd3UUpk+4jKvvVkGwWYrgm1qFRWeT7MfBBOyC6R4cXEHvPNE9CbjDCnklckz3ZzOr+dWsJuWt01lGUyfmvtaB6TgpXSfyNaRZpNu5qr3E5AGUTgVUd2l+kszkBsp/NFPA21l/KMTa4yTraZQBvKpxN/SkkJLCIRfd96R8GieUyvi2jTlbifSYB2LqAaSH2YbK0sqZsfbQUYUtptI4R7HQx8H5ZQVM48vqrt4DLof5jKIHWl1BReGZPSEOuC0LORL2OFme4Xl+SrV9kd+OvuL6xj8+DhEvs4NW8mKo6ETXq6Qh0/5wxne5jvr1QEWm06Ym7Bv6W7gw149qXTSwTnKoenGYk49fCjdDerAYRLKBa8dlCXnlZ1TgNyv688ic+iS5KjjCnk88BmsTixun4feA36wtQrqB7iQ50XNfZxWwXtLa0A9wjoITi8QzzE7rFer00G/Vqyiic0laGF9D1b1bkm+g7C3gmU7u7ueJWb1RB6z9IvHPGaNC0MYkUqVzDB7nCRoai+W20ykRmkeG/2hCi2y/k/Pc80CpC2E0r7KiDJ8lTdQxjYt7NJj/OYPvcGiSGVs4SSIByD//yCx2XXzXv/NfbImTv8s8oYqKriLOuHvpdxN/zLyBrA70xCsXD8nd6Hzfxl5htuW3kO1EiD5p5EXHrz8AqfQlo1h1+loYER/P/LJn9+9gZrmvoytBRi0XNe9hDwAniz1x1T+NHIuQO9atm1li6JSgI9MmmyCH+2n/z05GQ7j6W61QOP5rTbrpNCflRUkwJ+Ru9yU03D+Zo43iPc+vTiy3kYEDxxheX/MtbNWhsfw/q7j//2LBDBTaSB29PsughD+Uz88vSunQLEiSQCHoD8eHzf1XtpCwp172Odk0O/Par2HJKH80xTlUSU9SUw/XdFVqgTC71CF++9R76/Wg/9c6hnX0z4rehDBh1FGlX5FuQnejdz7GlZUBsHAyLcDTUXlkANT4zFpsBVdI4b1dcZjtkOt6DrBniN/+z4oFZVFmDpmNGMbO1T0JMIEWsO1zKDyKT6XYGW6rmHbtlctsk8l6HocdUTe9itD9okEHyNLIW/7rUqrfxI50PUJc0PWug8rf/pTCKscbA15a7uughmPJsz+31oJ5D3T3K5ivxha0QPIWG1N104gT796Yo03Qa0uKdy3Inngxwv+b00UaDNHE6vNETPhrRTyYX68Jcm8dMCV392b7/i/NdEs3sTFO0Lk/wMrw0brVTRv0QAAAABJRU5ErkJggg=="
                    class = "width_100px image_fit_cover height_30px" style = "height:auto;" alt="">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/800px-Google_Play_Store_badge_EN.svg.png" class = "width_100px image_fit_cover" alt="">
                </div>
            </div>
        </div>

        <div class = "text-center margin_top_50px">
            <p>{{__('footer.reserved')}}</p>
        </div>

    </footer>
</body>
</html>

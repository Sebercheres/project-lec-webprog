@extends('layouts.main')

@section('content')
    <div class = "height_300px" style="background-image: url('image/messageImage_1673341143089.jpg')">
        <div class = "margin_left_158px padding_top_160px">
            {{-- <img src="/public/others/home_1.jpg" alt=""> --}}
            {{-- https://img.freepik.com/premium-vector/dotted-world-map-white-background-vector-illustration_541075-471.jpg?w=360 --}}
            <div class = "overflow-auto w-30">
                <h1>Help nature, Prevent endangerment</h1>
                <p>Helping millions of others through our website in order to improve global condition of natures and society. Join us by registering and solving currently rising world crisis</p>
            </div>
            <a href="/register"><button type="button" class="shadow-sm btn_width_130px btn btn-warning text-light">Register</button></a>
            <a href="/login"><button type="button" class="shadow-sm btn_width_130px btn bg-white btn-outline-warning">Login</button></a>
        </div>
    </div>

    <div class = "d-flex justify-content-center pt-5">
        <div class = "text-center mx-5 width_300px">
            <img class = "width_height_80px" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRluBqpg5n1Ve3E3olcGkWIy_oDhF9tQ0aS8a05SAyJuB82hGZr" alt="">
            <p>End deforestation and planted with <a class = "text-decoration-none fw-bold" href="https://trees.org/">www.trees.org</a>. Trees for the Future fights problem with the Forest Garden Program, a process of planting specific types of fast-growing trees.</p>
        </div>

        <div class = "text-center mx-5 width_300px">
            <img class = "width_height_80px" src="https://awionline.org/sites/default/files/inline-images/16_AWI%20Logo_Hexagons_G.png" alt="">
            <div style="background-image: url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQLHlyxgJOY7LDrxo1U3j4Yx4eihXIUvZz9rZkkuCL4ydlTwcU8');background-size: cover;">
                <p>Support endangered animals with <a class = "text-decoration-none fw-bold" href="https://globalconservation.org/">www.globalconservation.com</a>. We empowers society all around the globe to help endagered animals to survive through illegal hunting and habitat destruction.</p>
            </div>
        </div>

        <div class = "text-center mx-5 width_300px">
            <img class = "width_height_80px" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTUQaDb15D_r9tPH4aoXM8d99lQe0O31JwHioksx1meDFx-22Bo" alt="">
            <p>Sending helps for those whose life are greatly impacted by disaster or environment condition. As we are part of equal humanity, we desired for life where people in need especially those who live in poverty to enjoy the same previlege.</p>
        </div>
    </div>

    <div class = "d-flex justify-content-center pt-5">
        <img  class = "me-5 width_720px"src="image/messageImage_1673348029326.jpg" alt="">
        <div class = "width_300px">
            <div style="background-image: url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQLHlyxgJOY7LDrxo1U3j4Yx4eihXIUvZz9rZkkuCL4ydlTwcU8');background-size: cover;" class = "width_240px height_70px ">
                <h3 class = "ms-2 pt-3" >How it works?</h3>
            </div>
            <div class = "mt-3">
                <div class = "d-flex align-middle">
                    <img class = "align-middle me-1 width_30px" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRluBqpg5n1Ve3E3olcGkWIy_oDhF9tQ0aS8a05SAyJuB82hGZr" alt="">
                    <p>You donate a certain amount of money </p>
                </div>
                <div class = "d-flex align-middle">
                    <img class = "align-middle me-1 width_30px" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRluBqpg5n1Ve3E3olcGkWIy_oDhF9tQ0aS8a05SAyJuB82hGZr" alt="">
                    <p>We donate every single cent to help those mentioned in the donation</p>
                </div>
                    <p>If you are in a possession of stuffs which could be helpful to repress and to help other people or even nature beings, feel free to contact us by the given media.</p>
            </div>
        </div>
    </div>

    <div class = "d-flex justify-content-center p-5">
        <div class = "w-25 me-3">
            <div class = "w-75">
                <h3>Our mission by the end of 2023</h3>
            </div>
            <p class = "w-100">Our main goal is to save and plant as many trees as we can and to prevent as many endangered animals from extinction. By seeking your help, we could retain our nature for the next generations. Furthermore, we also hope for your help as disasters and terrible environment struck mankind in these challenging times. Those in need for education, those in need for food, shall be helped as we are one in this society </p>
        </div>
        <div class = "">
            <img class = "width_480px" src="image/messageImage_1673437211742.jpg" alt="">
        </div>
    </div>

    <div class = "text-center pb-5">
        <h3>Our Partners</h3>
        <div class = "d-flex justify-content-center">
            <img class = "width_180px height_60px mx-3 image_fit_cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRltjKwizZOK70yWTl7PhjyAU40teVLfTNpjAxHU0dgcP6-KFbZ" alt="">
            <img class = "width_180px height_60px mx-3 image_fit_cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlL7AqP5LQyKqYziyEEtOEZCwpLxRit22z7QCXKqkKo1U7Ceps" alt="">
            <img class = "width_180px height_60px mx-3 image_fit_cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZygHHCnZRyF9YPRMudix2X5SJcdTTlz7CJhuYTSMq9nWQQ5uI" alt="">
            <img class = "width_180px height_60px mx-3 image_fit_cover" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRpJMW3HObEhrHZ856Ku6vcbqeggMW2lAwydTKl27MNPnIyriPg" alt="">
        </div>
    </div>

    <div class = "d-flex justify-content-center pt-3">
        <iframe class = "rounded-1" width="900" height="400" src="https://www.youtube.com/embed/E4JKRaxr8zE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class = "d-flex justify-content-center pt-3 pb-5">
        <a target="_blank" href="https://youtu.be/E4JKRaxr8zE">
            <button type="button" class="shadow-sm btn_width_160px btn_height_60px btn btn-warning fw-bold">View more</button>
        </a>
    </div>

@endsection

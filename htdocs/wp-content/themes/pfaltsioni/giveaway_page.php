<?php
/*
Template Name: Giveaway Page
*/

get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<style>
    .gradient-background {
    padding: 50px 40px 50px 40px;
    background: linear-gradient(300deg,#330040,darkviolet,#000000);
    background-size: 180% 180%;
    animation: gradient-animation 18s ease infinite;
  }

  @keyframes gradient-animation {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }
#iphone{
    filter: drop-shadow(0px 5px 20px #00000080);
}
.bos-approved{
    background: radial-gradient(
      circle at 100%,
      #b2a8fd,
      #8678f9 50%,
      #c7d2fe 75%,
      #9a8dfd 75%
    );
    font-weight: 800;
    background-size: 200% auto;
    color: #000;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: animatedTextGradient 1.5s linear infinite;
  }
  
  @keyframes animatedTextGradient {
    to {
      background-position: 200% center;
    }
  }
  .section-hero{
    min-height: 650px;
  }
  .frosted-bg{
    background-color: #7A7A7A80;
    border-radius: 15px;
  }


  .navbar {
    background-color: #212529;
    padding: 1rem;
    filter: drop-shadow(0px 5px 20px #00000080);
}

.navbar-brand, 
.nav-link,
.navbar-brand:hover, 
.nav-link:hover {
    color: rgba(255,255,255,0.9);
}

.navbar-toggler {
    border: none !important;
    outline: none !important;
    padding: 0.5rem;
    box-shadow: none !important;
}

.navbar-toggler:focus, .navbar-toggler:focus-within, .navbar-toggler:active {
   border: none !important;
   outline: none !important;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='#ffffffs' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.offcanvas.offcanvas-end {
    background-color: #212529;
    width: 275px;
}

@media (min-width: 992px) {
    #navbarOffcanvas {
        display: none;
    }
}

.offcanvas .nav-link {
    color: rgba(255,255,255,0.9);
    padding: 0.75rem 1rem;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    transition: background-color 0.2s ease;
}

.offcanvas .nav-link:hover,
.offcanvas .nav-link:focus {
    background-color: rgba(255,255,255,0.1);
    color: #fff;
}

.highlight{
    color: #8678f9 !important;
}
.btn-close {
    filter: invert(1) grayscale(100%) brightness(200%);
    opacity: 0.7;
}

.btn-close:hover {
    opacity: 1;
}

.card{
    min-height: 350px;
}
.card-body img{
    max-width: 200px;
}

@media (min-width: 992px) {
    .navbar-nav .nav-link {
        padding: 0.5rem 1rem;
        position: relative;
    }
    
    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background-color: #fff;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }
    
    .navbar-nav .nav-link:hover::after {
        width: 80%;
    }
}

/* TABLE STYLING */

.table-container {
    background: linear-gradient(145deg, #212529, #343a40);
    border-radius: 15px;
    padding: 1.5rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
}

.table {
    margin-bottom: 0;
}

.table > :not(caption) > * > * {
    padding: 1rem 1.5rem;
    background-color: transparent;
    border-bottom-color: rgba(255, 255, 255, 0.1);
    color: #fff;
}

.table > thead > tr > th {
    background-color: rgba(0, 0, 0, 0.2);
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-top: none;
    border-bottom: 2px solid rgba(255, 255, 255, 0.2) !important;
}

.table > tbody > tr {
    transition: all 0.2s ease;
    
}
.table > tbody > tr:hover td{
    color: #8678f9;
    transition: all 0.2s ease;
}

.table > tbody > tr:hover {
    background-color: rgba(255, 255, 255, 0.55);
    color: purple;
    transform: translateX(6px);
    box-shadow: 10px 10px 14px 2px rgba(0,0,0,0.1);
    -webkit-box-shadow: 10px 10px 14px 2px rgba(0,0,0,0.1);
    -moz-box-shadow: 10px 10px 14px 2px rgba(0,0,0,0.1);    

}

.table > tbody > tr:last-child > td {
    border-bottom: none;
}



/* Responsive styles */
@media (max-width: 768px) {
    .table-container {
        padding: 1rem;
        border-radius: 10px;
    }

    .table > :not(caption) > * > * {
        padding: 0.75rem 1rem;
    }

    .status-badge {
        padding: 0.3rem 0.8rem;
        font-size: 0.8rem;
    }
}

/* .casino-cards .col{
    
} */
@media screen and (max-width: 320px) {
    .navbar{
        display: flex;
        flex-direction: row;
        gap: 1rem;
        margin-block: 0.5rem;
        justify-content: space-between;
    }
    .navbar ul{
        display: flex;
        gap: 1rem;
        flex-direction: row;
        align-items: center;
        margin-right: 1rem;
        justify-content: end;
        
    }
    .navbar img{
        width: 50px;
        margin-inline-start: 1rem;
    }


    .intro{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-image: url("https://scontent.fskg1-2.fna.fbcdn.net/v/t39.30808-6/448317409_303099852874239_4550156621214544172_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=iMOMiLbDWv8Q7kNvgGOIiWc&_nc_ht=scontent.fskg1-2.fna&oh=00_AYC6eimIvswl-c9NWaB2DIxgqmcCOQrJw4YNMOs9Ww27wQ&oe=6699F274");
        /* background: url("https://images.unsplash.com/photo-1575318080244-dd217d9db1e2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center, right;
        height: 250px;
        position: relative;
    }
    .overlay{
        background-color: rgba(0%, 0%, 0%, 0.35);
        width: calc(100% + 2rem);
        margin: -1rem;
        min-height: 250px;

    }
    .title{
        max-width: 1024px;
        margin-inline: auto;
    }
    .info{
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: start;
        gap: 3rem;
        padding-bottom: 3rem;
        margin-top: -3rem;
        margin-inline: 2rem;
    }
    .info h3{
        font-size: var(--subheader-fs-mob);
        text-align: start;
    }
    .intro-btn{
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: var(--subheader-fs-mob);
        font-weight: 700;
        padding: 1rem;
        border-radius: 15px;
        height: 100px;
    }
    .intro-btn:hover{
        background-color: var(--accent-color-hover);

    }
    .gradient{
        width: 100%;
        height: 400px;
        background: rgb(180,47,187);
        background: -moz-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: -webkit-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: linear-gradient(4deg, rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b42fbb",endColorstr="#262626",GradientType=1);
    
    }
    .casinos{
        min-height: 400px;
        width: 100%;
        background-color: var(--primary-color);
        margin-top: -6rem;
        padding-bottom: 6rem;
    }
    .casino-container{
        display: flex;
        flex-direction: column;
        flex-wrap:nowrap;
        gap: 2rem;
        justify-content: center;
        align-items: center;
        width: auto;
        margin: auto;
    }
    .casino-card{
        width: 200px;
        height: 200px;
        margin-bottom: 2rem;
        background-color: var(--dark-color);
        border-radius: 10px;
    }
    .casino-image{
        position: relative;
    }
    .casino-tag:hover > .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: 40px;
        position: absolute;
        bottom: calc(50% - 20px);
        left: calc(50% - 50px);
        opacity: 1;
        transition: ease-in 300ms;
    }
    .casino-tag:hover > img {
        filter: brightness(0.7);
        transition: ease-in 300ms;
    }
    .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: 40px;
        position: absolute;
        bottom: 0;
        left: calc(50% - 50px);
        opacity: 0;
        transition: ease-in 300ms;
    }
    .casino-btn:hover{
        background-color: var(--accent-color-hover);
    }
    .casino-card img{
        width: 200px;
        height: 200px;
        border-radius: 10px;
        box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.1);
    }  
    
    footer{
        background-color: var(--dark-color);
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .footer{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .social{
        display: flex;
        flex-direction: column;
        gap: 2rem;
        margin: 2rem;
        min-width: 200px;
    }
    .social ul{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 2rem;
        margin-inline: 2rem;
        
    }
    .social ul img{
        width: 36px;
    }
    .disclaimer{
        padding: 2rem;
        min-width: 300px;
    }
    .copyright{
        text-align: center;
        margin-block: 1rem;
    }
}
@media screen and (min-width:321px) and (max-width: 425px) {
    .navbar{
        display: flex;
        flex-direction: row;
        gap: 1rem;
        margin-block: 0.5rem;
        justify-content: space-between;
    }
    .navbar ul{
        display: flex;
        gap: 1rem;
        flex-direction: row;
        align-items: center;
        margin-right: 2rem;
        justify-content: end;
        
    }
    .navbar img{
        width: 50px;
        margin-inline-start: 2rem;
    }


    .intro{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-image: url("https://scontent.fskg1-2.fna.fbcdn.net/v/t39.30808-6/448317409_303099852874239_4550156621214544172_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=iMOMiLbDWv8Q7kNvgGOIiWc&_nc_ht=scontent.fskg1-2.fna&oh=00_AYC6eimIvswl-c9NWaB2DIxgqmcCOQrJw4YNMOs9Ww27wQ&oe=6699F274");
        /* background: url("https://images.unsplash.com/photo-1575318080244-dd217d9db1e2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center, right;
        height: 250px;
        position: relative;
    }
    .overlay{
        background-color: rgba(0%, 0%, 0%, 0.35);
        width: calc(100% + 2rem);
        margin: -1rem;
        min-height: 250px;

    }
    .title{
        max-width: 1024px;
        margin-inline: auto;
    }
    .info{
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: start;
        gap: 3rem;
        padding-bottom: 3rem;
        margin-top: -3rem;
        margin-inline: 2rem;
    }
    .info h3{
        font-size: var(--subheader-fs-mob);
        text-align: start;
    }
    .intro-btn{
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: var(--subheader-fs-mob);
        font-weight: 700;
        padding: 1rem;
        border-radius: 15px;
        height: 100px;
    }
    .intro-btn:hover{
        background-color: var(--accent-color-hover);

    }
    .gradient{
        width: 100%;
        height: 400px;
        background: rgb(180,47,187);
        background: -moz-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: -webkit-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: linear-gradient(4deg, rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b42fbb",endColorstr="#262626",GradientType=1);
    
    }
    .casinos{
        min-height: 400px;
        width: 100%;
        background-color: var(--primary-color);
        margin-top: -6rem;
        padding-bottom: 6rem;
    }
    .casino-container{
        display: flex;
        flex-direction: column;
        flex-wrap:nowrap;
        gap: 2rem;
        justify-content: center;
        align-items: center;
        width: auto;
        margin: auto;
    }
    .casino-card{
        width: 200px;
        height: 200px;
        margin-bottom: 2rem;
        background-color: var(--dark-color);
        border-radius: 10px;
    }
    .casino-image{
        position: relative;
    }
    .casino-tag:hover > .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: 40px;
        position: absolute;
        bottom: calc(50% - 20px);
        left: calc(50% - 50px);
        opacity: 1;
        transition: ease-in 300ms;
    }
    .casino-tag:hover > img {
        filter: brightness(0.7);
        transition: ease-in 300ms;
    }
    .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: 40px;
        position: absolute;
        bottom: 0;
        left: calc(50% - 50px);
        opacity: 0;
        transition: ease-in 300ms;
    }
    .casino-btn:hover{
        background-color: var(--accent-color-hover);
    }
    .casino-card img{
        width: 200px;
        height: 200px;
        border-radius: 10px;
        box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.1);
    }  
    
    footer{
        background-color: var(--dark-color);
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .footer{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .social{
        display: flex;
        flex-direction: column;
        gap: 2rem;
        margin: 2rem;
        min-width: 200px;
    }
    .social ul{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 2rem;
        margin-inline: 4rem;
        
    }
    .social ul img{
        width: 36px;
    }
    .disclaimer{
        padding: 2rem;
        min-width: 300px;
    }
    .copyright{
        text-align: center;
        margin-block: 1rem;
    }

}

@media screen and (min-width:426px) and (max-width: 768px) {

    .navbar{
        display: flex;
        flex-direction: row;
        gap: 1rem;
        margin-block: 0.5rem;
        justify-content: space-between;
    }
    .navbar ul{
        display: flex;
        gap: 2rem;
        flex-direction: row;
        align-items: center;
        margin-right: 2rem;
        justify-content: end;
        
    }
    .navbar img{
        width: 50px;
        margin-inline-start: 2rem;
    }


    .intro{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* padding: 1rem; */
        /* background-image: url("https://scontent.fskg1-2.fna.fbcdn.net/v/t39.30808-6/448317409_303099852874239_4550156621214544172_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=iMOMiLbDWv8Q7kNvgGOIiWc&_nc_ht=scontent.fskg1-2.fna&oh=00_AYC6eimIvswl-c9NWaB2DIxgqmcCOQrJw4YNMOs9Ww27wQ&oe=6699F274"); */
        /* background: url("https://images.unsplash.com/photo-1575318080244-dd217d9db1e2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center, right;
        height: 350px;
        position: relative;
    }
    .overlay{
        background-color: rgba(0%, 0%, 0%, 0.35);
        width: calc(100% + 2rem);
        margin: -1rem;
        min-height: 350px;

    }
    
    .info{
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: start;
        gap: 3rem;
        padding-block: 6rem;
        margin-left: 2rem;
    }
    .info h3{
        text-align: start;
    }
    .intro-btn{
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 2rem;
        font-weight: 700;
        padding: 1rem;
        border-radius: 15px;
        height: 100px;
    }
    .intro-btn:hover{
        background-color: var(--accent-color-hover);

    }
    .gradient{
        width: 100%;
        height: 400px;
        background: rgb(180,47,187);
        background: -moz-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: -webkit-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: linear-gradient(4deg, rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b42fbb",endColorstr="#262626",GradientType=1);
    
    }
    .casinos{
        min-height: 400px;
        width: 100%;
        background-color: var(--primary-color);
        padding-bottom: 6rem;
    }
    .casino-container{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 75%;
        margin: auto;
    }
    .casino-card{
        width: 200px;
        height: 200px;
        margin: 2rem;
        margin-bottom: 2rem;
        background-color: var(--dark-color);
        border-radius: 15px;
    }
    .casino-image{
        position: relative;
    }
    .casino-tag:hover > .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: 40px;
        position: absolute;
        bottom: calc(50% - 20px);
        left: calc(50% - 50px);
        opacity: 1;
        transition: ease-in 300ms;
    }
    .casino-tag:hover > img {
        filter: brightness(0.7);
        transition: ease-in 300ms;
    }
    .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: 40px;
        position: absolute;
        bottom: 0;
        left: calc(50% - 50px);
        opacity: 0;
        transition: ease-in 300ms;
    }
    .casino-btn:hover{
        background-color: var(--accent-color-hover);
    }
    .casino-card img{
        width: 200px;
        height: 200px;
        border-radius: 15px;
        box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.1);
    }  
    
    footer{
        background-color: var(--dark-color);
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .footer{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .social{
        display: flex;
        flex-direction: column;
        gap: 4rem;
        margin: 2rem;
        min-width: 400px;
    }
    .social ul{
        display: flex;
        flex-direction: row;
        gap: 2rem;
        
    }
    .social ul img{
        width: 36px;
    }
    .disclaimer{
        padding: 2rem;
        
    }
    .copyright{
        text-align: center;
        margin-block: 1rem;
    }
    
}
@media screen and (min-width:769px) and (max-width: 1024px) {

    .navbar{
        display: flex;
        flex-direction: row;
        gap: 1rem;
        margin-block: 0.5rem;
        justify-content: space-between;
    }
    .navbar ul{
        display: flex;
        gap: 4rem;
        flex-direction: row;
        align-items: center;
        margin-right: 2rem;
        justify-content: end;
        
    }
    .navbar img{
        width: 50px;
        margin-inline-start: 2rem;
    }


    .intro{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-image: url("https://scontent.fskg1-2.fna.fbcdn.net/v/t39.30808-6/448317409_303099852874239_4550156621214544172_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=iMOMiLbDWv8Q7kNvgGOIiWc&_nc_ht=scontent.fskg1-2.fna&oh=00_AYC6eimIvswl-c9NWaB2DIxgqmcCOQrJw4YNMOs9Ww27wQ&oe=6699F274");
        /* background: url("https://images.unsplash.com/photo-1575318080244-dd217d9db1e2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center, right;
        height: 580px;
        position: relative;
    }
    .overlay{
        background-color: rgba(0%, 0%, 0%, 0.35);
        width: calc(100% + 2rem);
        margin: -1rem;
        min-height: 580px;

    }
    .title{
        max-width: 1024px;
        margin-inline: auto;
    }
    .info{
        
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 3rem;
        padding-block: 6rem;
        
    }
    .info h3{
        text-align: start;
    }
    .intro-btn{
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 2rem;
        font-weight: 700;
        padding: 1rem;
        border-radius: 15px;
        height: 100px;
    }
    .intro-btn:hover{
        background-color: var(--accent-color-hover);

    }
    .gradient{
        width: 100%;
        height: 400px;
        background: rgb(180,47,187);
        background: -moz-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: -webkit-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: linear-gradient(4deg, rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b42fbb",endColorstr="#262626",GradientType=1);
        
    }
    .casinos{
        min-height: 400px;
        width: 100%;
        background-color: var(--primary-color);
        padding-bottom: 6rem;
    }
    .casino-container{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 80%;
        margin: auto;
    }
    .casino-card{
        width: 250px;
        height: 250px;
        margin: 2rem;
        margin-bottom: 2rem;
        background-color: var(--dark-color);
        border-radius: 15px;
    }
    .casino-image{
        position: relative;
    }
    .casino-tag:hover > .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: 40px;
        position: absolute;
        bottom: calc(50% - 20px);
        left: calc(50% - 50px);
        opacity: 1;
        transition: ease-in 300ms;
    }
    .casino-tag:hover > img {
        filter: brightness(0.7);
        /* transform: scale(1.1); */
        transition: ease-in 300ms;
    }
    .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: 40px;
        position: absolute;
        bottom: 0;
        left: calc(50% - 50px);
        opacity: 0;
        transition: ease-in 300ms;
    }
    .casino-btn:hover{
        background-color: var(--accent-color-hover);
    }
    .casino-card img{
        width: 250px;
        height: 250px;
        border-radius: 15px;
        box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.1);
    }  
    
    footer{
        background-color: var(--dark-color);
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .footer{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .social{
        display: flex;
        flex-direction: column;
        gap: 4rem;
        margin: 2rem;
        min-width: 400px;
    }
    .social ul{
        display: flex;
        flex-direction: row;
        gap: 2rem;
        
    }
    .social ul img{
        width: 36px;
    }
    .disclaimer{
        padding: 2rem;
        /* max-width: 600px; */
    }
    .copyright{
        text-align: center;
        margin-block: 1rem;
    }
}
@media screen and (min-width:1025px) and (max-width: 1440px) {

    .navbar{
        display: flex;
        flex-direction: row;
        gap: 1rem;
        margin-block: 0.5rem;
        justify-content: space-between;
    }
    .navbar ul{
        display: flex;
        gap: 4rem;
        flex-direction: row;
        align-items: center;
        margin-right: 2rem;
        justify-content: end;
        
    }
    .navbar img{
        width: 50px;
        margin-inline-start: 2rem;
    }


    .intro{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-image: url("https://scontent.fskg1-2.fna.fbcdn.net/v/t39.30808-6/448317409_303099852874239_4550156621214544172_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=iMOMiLbDWv8Q7kNvgGOIiWc&_nc_ht=scontent.fskg1-2.fna&oh=00_AYC6eimIvswl-c9NWaB2DIxgqmcCOQrJw4YNMOs9Ww27wQ&oe=6699F274");
        /* background: url("https://images.unsplash.com/photo-1575318080244-dd217d9db1e2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center, right;
        /* width: 100%; */
        height: 580px;
        position: relative;
    }
    .overlay{
        background-color: rgba(0%, 0%, 0%, 0.35);
        width: calc(100% + 2rem);
        margin: -1rem;
        min-height: 580px;

    }
    .title{
        max-width: 1024px;
        margin-inline: auto;
    }
    .info{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 3rem;
        padding-block: 6rem;
    }
    .info h3{
        text-align: start;
    }
    .intro-btn{
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 2rem;
        font-weight: 700;
        padding: 1rem;
        border-radius: 15px;
        height: 100px;
    }
    .intro-btn:hover{
        background-color: var(--accent-color-hover);

    }
    .gradient{
        width: 100%;
        height: 400px;
        background: rgb(180,47,187);
        background: -moz-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: -webkit-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: linear-gradient(4deg, rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b42fbb",endColorstr="#262626",GradientType=1);
    
    }
    .casinos{
        min-height: 400px;
        width: 100%;
        background-color: var(--primary-color);
        padding-bottom: 6rem;
    }
    .casino-container{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 80%;
        margin: auto;
    }
    .casino-card{
        width: 350px;
        height: 350px;
        margin: 2rem;
        margin-bottom: 2rem;
        background-color: var(--dark-color);
        border-radius: 15px;
    }
    .casino-image{
        position: relative;
    }
    .casino-tag:hover > .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: 40px;
        position: absolute;
        bottom: calc(50% - 20px);
        left: calc(50% - 50px);
        opacity: 1;
        transition: ease-in 300ms;
    }
    .casino-tag:hover > img {
        filter: brightness(0.7);
        transition: ease-in 300ms;
    }
    .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: 40px;
        position: absolute;
        bottom: 0;
        left: calc(50% - 50px);
        opacity: 0;
        transition: ease-in 300ms;
    }
    .casino-btn:hover{
        background-color: var(--accent-color-hover);
    }
    .casino-card img{
        width: 350px;
        height: 350px;
        border-radius: 15px;
        box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.1);
    }  
    
    footer{
        background-color: var(--dark-color);
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .footer{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .social{
        display: flex;
        flex-direction: column;
        gap: 4rem;
        margin: 2rem;
        min-width: 400px;
    }
    .social ul{
        display: flex;
        flex-direction: row;
        gap: 2rem;
        
    }
    .social ul img{
        width: 36px;
    }
    .disclaimer{
        padding: 2rem;
        width: 400px;
    }
    .copyright{
        text-align: center;
        margin-block: 1rem;
    }
}
@media screen and (min-width:1441px) {

    .navbar{
        display: flex;
        flex-direction: row;
        gap: 1rem;
        margin-block: 0.5rem;
        justify-content: space-between;
    }
    .navbar ul{
        display: flex;
        gap: 4rem;
        flex-direction: row;
        align-items: center;
        margin-right: 2rem;
        justify-content: end;
        
    }
    .navbar img{
        width: 50px;
        margin-inline-start: 2rem;
    }


    .intro{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-image: url("https://scontent.fskg1-2.fna.fbcdn.net/v/t39.30808-6/448317409_303099852874239_4550156621214544172_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=iMOMiLbDWv8Q7kNvgGOIiWc&_nc_ht=scontent.fskg1-2.fna&oh=00_AYC6eimIvswl-c9NWaB2DIxgqmcCOQrJw4YNMOs9Ww27wQ&oe=6699F274");
        /* background: url("https://images.unsplash.com/photo-1575318080244-dd217d9db1e2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center, right;
        height: 580px;
        position: relative;
    }
    .overlay{
        background-color: rgba(0%, 0%, 0%, 0.35);
        width: calc(100% + 2rem);
        margin: -1rem;
        min-height: 580px;

    }
    .title{
        max-width: 1024px;
        margin-inline: auto;
    }
    .info{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 3rem;
        padding-block: 6rem;
    }
    .info h3{
        text-align: start;
    }
    .intro-btn{
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 2rem;
        font-weight: 700;
        padding: 1rem;
        border-radius: 15px;
        height: 100px;
    }
    .intro-btn:hover{
        background-color: var(--accent-color-hover);

    }
    .gradient{
        width: 100%;
        height: 400px;
        background: rgb(180,47,187);
        background: -moz-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: -webkit-linear-gradient(4deg,rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        background: linear-gradient(4deg, rgba(70,14,76,10) 15%, rgba(38,38,38,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b42fbb",endColorstr="#262626",GradientType=1);
    
    }
    .casinos{
        min-height: 400px;
        width: 100%;
        background-color: var(--primary-color);
        padding-bottom: 6rem;
    }
    .casino-container{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 1000px;
        margin: auto;
    }
    .casino-card{
        width: 350px;
        height: 350px;
        margin: 2rem;
        margin-bottom: 2rem;
        background-color: var(--dark-color);
        border-radius: 15px;
    }
    .casino-image{
        position: relative;
    }
    .casino-tag:hover > .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: fit-content;
        position: absolute;
        bottom: calc(50% - 3rem);
        left: calc(50% - 50px);
        opacity: 1;
        transition: ease-in 300ms;
    }
    .casino-tag:hover > img {
        filter: brightness(0.7);
        transition: ease-in 300ms;
    }
    .casino-btn{
        width: 100px;
        background-color: var(--accent-color);
        color: var(--dark-color);
        font-size: 1rem;
        padding: 0.6rem;
        border-radius: 10px;
        height: 40px;
        position: absolute;
        bottom: 0;
        left: calc(50% - 50px);
        opacity: 0;
        transition: ease-in 300ms;
    }
    .casino-btn:hover{
        background-color: var(--accent-color-hover);
    }
    .casino-card img{
        width: 350px;
        height: 350px;
        border-radius: 15px;
        box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.1);
    }  
    
    footer{
        background-color: var(--dark-color);
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .footer{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .social{
        display: flex;
        flex-direction: column;
        gap: 4rem;
        margin: 2rem;
        min-width: 400px;
    }
    .social ul{
        display: flex;
        flex-direction: row;
        gap: 2rem;
        
    }
    .social ul img{
        width: 36px;
    }
    .disclaimer{
        padding: 2rem;
        width: 400px;
    }
    .copyright{
        text-align: center;
        margin-block: 1rem;
    }
}
.footer-logo{
    width: clamp(250px, 400px, 500px);
}
.mid-footer{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.giveaway-box{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 200px;
    
}
.giveaway-box:hover{
    scale: 110%;
}
.button-duo{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 1rem;
}

@media ( max-width: 768px) {
    .button-duo{
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 2rem;
    }
    .info{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
}
@media ( min-width: 768px) {
    .hidden-card{
        display: none;
    }
}

.hover-card {
    position: relative;
    width: 300px;
    height: 300px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
}

.hover-card-image {
    width: 100%;
    height: 100%;
    background-image: url("/images/betriot-logo.png");
    background-size: cover;
    background-position: center;
    transition: transform 0.3s ease;
    transform: scale(1.05);

}

.hover-card-title-overlay {
    position: absolute;
    bottom: -300px;
    left: 0;
    width: 100%;
    height: 200%;
    background: linear-gradient(to top, rgba(98, 1, 90, 0.9), transparent);
    display: flex;
    align-items: flex-end;
    padding: 15px 15px 100px 15px;
    transition: transform 0.3s ease, opacity 0.5s ease;

}

.hover-card-title {
    color: #fff;
    font-size: 1.5rem;
    margin-bottom: 0;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    transition: transform 0.3s ease;
}

.hover-card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.7);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    padding: 20px;
    text-align: center;
}

.hover-card:hover .hover-card-image {
    transform: scale(1.1);
    filter: blur(5px);
}

.hover-card:hover .hover-card-title-overlay {
    transform: translateY(-37%);
    opacity: 1;

}

.hover-card:hover .hover-card-overlay {
    opacity: 1;
}

.hover-card-description {
    color: rgba(255,255,255,0.8);
    margin-bottom: 20px;
    text-align: center;
}
.card-btn{
    padding: 12px 22px 12px 22px !important;
    background-color: #8678f9 !important;
    animation: glow-animation 2s infinite ease-in-out;
}

@keyframes glow-animation {
    0%, 100% {
      box-shadow: 0 0 10px rgba(255, 140, 0, 0.8), 
                  0 0 20px rgba(255, 0, 128, 0.6), 
                  0 0 30px rgba(255, 0, 128, 0.4);
    }
    50% {
      box-shadow: 0 0 20px rgba(255, 140, 0, 1), 
                  0 0 30px rgba(255, 0, 128, 0.8), 
                  0 0 40px rgba(255, 0, 128, 0.6);
    }
  }
 @media (max-width: 576px){
    .lead{
        font-size: 17px !important;
    }
 }
</style>
    <div class="offcanvas offcanvas-end" 
         tabindex="-1" 
         id="navbarOffcanvas" 
         aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header border-bottom border-secondary">
            <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Book of Slots</h5>
            <button type="button" 
                    class="btn-close" 
                    data-bs-dismiss="offcanvas" 
                    aria-label="Close navigation">
            </button>
        </div>
        <div class="offcanvas-body p-0">
            <nav class="h-100" aria-label="Mobile navigation">
                <ul class="navbar-nav h-100">
                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <main>
        <section class="gradient-background section-hero row d-flex justify-content-center align-items-center">
            <div class=" frosted-bg px-2 px-sm-4 py-5 my-5 text-center d-flex align-items-center flex-column col-sm-12 col-lg-5">
                <img class="d-block  mb-5" src="/images/FullLogo.png" alt="" width="600px">
                <div>
                    <h1 class="display-4 fw-bold text-light bos-approved">GIVEAWAY ALERT</h1>
                    <div class="p-0 p-sm-4 mx-auto">
                        <p class="lead mb-4">Η ομάδα του Book of Slots, σε καλωσορίζει με το μεγαλύτερο Giveaway της χρονιάς. Ζήσε και εσύ την εμπειρία, παίρνοντας μέρος στο διαγωνισμό και διεκδίκησε ένα...<br> <span class="display-5 fw-bold bos-approved">Iphone 16</span></p>
                    </div>
                    <div class="enarxi-lixi d-flex justify-content-between">
                        <p class="lead p-0 m-0 text-start fw-bold"> Έναρξη:<br>22/11/2024</p>
                        <p class="lead p-0 m-0 text-end fw-bold">Λήξη:<br>4/1/2025</p>
                    </div>
                    
                </div>
            </div>
        </div>
            <div class="col-lg-6 col-sm-10">
                <img class="img-fluid" id="iphone" src="/images/pngimg.com - iphone16_PNG36.png" alt="phone">
            </div>
        </section>
    </main>
    <section class="container-fluid section-terms">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 mt-5 mb-5 text-center pt-5 ">
                <div class="col">
                    <div style="background: #e9d362;  /* fallback for old browsers */ background: -webkit-linear-gradient(45deg, #333333, #e9d362);  /* Chrome 10-25, Safari 5.1-6 */ background: linear-gradient(45deg, #333333, #e9d362); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ " class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal text-light">Πρώτος Νικητής</h4>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <img class="img-fluid" id="iphone" src="/images/pngimg.com - iphone16_PNG36.png" alt="phone">                   
                            <span class="display-5 fw-bold bos-approved">Iphone 16</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="background: #757F9A;  /* fallback for old browsers */ background: -webkit-linear-gradient(to right, #D7DDE8, #757F9A);  /* Chrome 10-25, Safari 5.1-6 */ background: linear-gradient(135deg, #D7DDE8, #757F9A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ " class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal text-light">Δεύτερος Νικητής</h4>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center align-items-center text-light">
                            <h2>Paysafe</h2>
                            <h2 class="display-5 fw-bold">150€</h2>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="background: #603813;  /* fallback for old browsers */ background: -webkit-linear-gradient(to right, #b29f94, #603813);  /* Chrome 10-25, Safari 5.1-6 */ background: linear-gradient(to right, #b29f94, #603813); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ " class="card mb-4 rounded-3 shadow-sm ">
                        <div class="card-header py-3  ">
                            <h4 class="my-0 fw-normal text-light">Τρίτος Νικητής</h4>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center align-items-center text-light">
                            <h2>Paysafe</h2>
                            <h2 class="display-5 fw-bold">100€</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <h2 class="display-5 text-light fw-bold text-capitalize p-2 p-md-5 ">όροι & προϋποθέσεις</h2>
                <p class="lead p-2">Στο διαγωνισμό λαμβάνεις συμμετοχή, κάνοντας εγγραφή και κατάθεση σε ένα ή περισσότερα από τα καζίνο που συμμετέχουν στο giveaway. Στο τέλος της περιόδου του διαγωνισμού, οι συμμετοχές του κάθε διαγωνιζόμενου θα προστεθούν και θα γίνει η κλήρωση για τους μεγάλους νικητές. <span style="font-weight: bold;">Pro tip</span>: πραγματοιποιόντας παραπάνω από μια κατάθεση, αυξάνεις τις πιθανότητες να κερδίσεις, μιας και έτσι μαζεύεις περισσότερες συμμετοχές!</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center mx-2">
            <div class="table-container col-lg-3 m-5 p-4">
                <table class="table table-dark table-borderless">
                    <thead>
                        <tr>
                            <th scope="col"> Πρωτη Καταθεση</th>
                            <th scope="col">Συμμετοχες</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>25€</td>
                            <td><span class="status-badge status-active">2</span></td>
                        </tr>
                        <tr>
                            <td>50€</td>
                            <td><span class="status-badge status-pending">5</span></td>
                        </tr>
                        <tr>
                            <td>100€</td>
                            <td><span class="status-badge status-inactive">12</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-container col-lg-3 m-5 p-4">
                <table class="table table-dark table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Επιπλεον Καταθεση</th>
                            <th scope="col">Συμμετοχες</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>20€</td>
                            <td><span class="status-badge status-active">2</span></td>
                        </tr>
                        <tr>
                            <td>40€</td>
                            <td><span class="status-badge status-pending">4</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <h2 class="display-5 text-light fw-bold  p-2 p-md-5 ">Πως θα λάβεις συμμετοχή</h2>
            </div>
        </div>
        <div class="row">
            <div class="row d-flex justify-content-center p-2 p-md-5 ">
                <div class="col-lg-4 text-center text-sm-start">
                    <p class="lead">Ακολούθησε τα βήματα και ίσως να είσαι εσύ ο μεγάλος τυχερός που θα κερδίσει ένα ολοκαίνουργιο Iphone 16! Ο κάθε διαγωνιζόμενος μπορεί να μαζέψει όσες συμμετοχές θέλει!</p>
                    <p class="lead">Προσοχή! Οι καταθέσεις χωρίς screenshot, καθώς και screenshot που δεν είναι έγκυρα δεν θα λαμβάνονται υπόψην! Βασική προϋπόθεση για έγκυρα screenshot είναι να φαίνονται καθαρά η <span style="font-weight: bold;">ημερομηνία</span>, το <span style="font-weight: bold;">ποσό κατάθεσης</span> και το <span style="font-weight: bold;">Bonus</span>.</p>
                    <div class="row text-center text-sm-start text-light">
                        <p class="lead">Στείλε εδώ τα screenshot και λάβε συμμετοχή!</p>
                        <div class="d-flex flex-row gap-3 mb-5 justify-content-center justify-content-sm-start">
                            <a href="https://www.facebook.com/profile.php?id=100095226790523&locale=el_GR"><img class="img-fluid" width="80px"  src="/images/fb-lg.png" alt="facebook"></a>
                            <a href="https://www.instagram.com/bookofslots/"><img class="img-fluid" width="80px" src="/images/insta-lg.png" alt="instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-start">
                    <ul>
                        <li class="d-flex gap-4"><span class="text-light lead">1.</span><p>Επέλεξε το καζίνο από τη λίστα στη συνέχεια της σελίδας και ακολούθησε το link.</p></li>
                        <li class="d-flex gap-4"><span class="text-light lead">2.</span><p>Κάνε κατάθεση και επέλεξε το Bonus καλωσορίσματος. Μη ξεχάσεις να κρατήσεις screenshot από τη κατάθεση καθώς και το bonus που επέλεξες!</p></li>
                        <li class="d-flex gap-4"><span class="text-light lead">3.</span><p>Στείλε μας τα screenshot που κράτησες <a class="text-light highlight" href="https://www.instagram.com/bookofslots/">εδώ</a> για να είναι η συμμετοχή σου έγκυρη.</p></li>
                        <li class="d-flex gap-4"><span class="text-light lead">4.</span><p>Παίξε στα πιο δυνατά casino και μάζεψε συμμετοχές για το μεγαλύτερο giveaway της χρονιάς!</p></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="container">
            
        </div>
    </section>
    <section>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <h2 class="display-5 text-light fw-bold  p-2 p-md-5 ">Που μπορείς να πάιξεις</h2>
            </div>
        </div>
        <div class="container p-2 p-md-5">
            <div class="row">
                <div class="col mt-4 d-flex justify-content-center">
                    <div class="hover-card">
                        <div style="background-image: url('/images/genieplay-casino-logo.webp');" class="hover-card-image"></div>
                        <div class="hover-card-title-overlay d-flex flex-column align-items-center justify-content-end">
                            <h2 class="hover-card-title pb-4">GeniePlay Casino</h2>
                            <p class="hover-card-description pb-2">
                                Bonus 100% up to 1000€ + 50 Free Spins
                            </p>
                            <a href="https://gnp.servclick1move.com/?mid=246373_1449530" class="btn card-btn text-light">Παίξε τώρα</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 d-flex justify-content-center">
                    <div class="hover-card">
                        <div style="background-image: url('/images/greenluck-casino.webp');" class="hover-card-image"></div>
                        <div class="hover-card-title-overlay d-flex flex-column align-items-center justify-content-end">
                            <h2 class="hover-card-title pb-4">GreenLuck Casino</h2>
                            <p class="hover-card-description pb-2">
                                Bonus 100% up to 500€ + 200 Free Spins + Bonus crab
                            </p>
                            <a href="https://track.affilirise.com/visit/?bta=656045&nci=5691&utm_campaign=Bookofslots" class="btn card-btn text-light">Παίξε τώρα</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 d-flex justify-content-center">
                    <div class="hover-card">
                        <div style="background-image: url('/images/herospin-casino-logo.webp');" class="hover-card-image"></div>
                        <div class="hover-card-title-overlay d-flex flex-column align-items-center justify-content-end">
                            <h2 class="hover-card-title pb-4">HeroSpin Casino</h2>
                            <p class="hover-card-description pb-2">
                                Bonus 50% up to 1000€
                            </p>
                            <a href="https://track.bohopartners.com/visit/?bta=35199&brand=herospin&utm_campaign=bookofslots" class="btn card-btn text-light">Παίξε τώρα</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 d-flex justify-content-center">
                    <div class="hover-card">
                        <div style="background-image: url('/images/GreatSpin-casino.svg');" class="hover-card-image"></div>
                        <div class="hover-card-title-overlay d-flex flex-column align-items-center justify-content-end">
                            <h2 class="hover-card-title pb-4">GreatSpin Casino</h2>
                            <p class="hover-card-description pb-2">
                                Bonus 100% up to 1000€ + 50 Free Spins
                            </p>
                            <a href="https://media.highaffiliates.com/redirect.aspx?pid=15225&lpid=245&bid=1825" class="btn card-btn text-light">Παίξε τώρα</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 d-flex justify-content-center">
                    <div class="hover-card">
                        <div style="background-image: url('/images/Talismania_Logo.webp');" class="hover-card-image"></div>
                        <div class="hover-card-title-overlay d-flex flex-column align-items-center justify-content-end">
                            <h2 class="hover-card-title pb-4">Talismania</h2>
                            <p class="hover-card-description pb-2">
                                Bonus 200% up to 500€ - no wagering requirement
                            </p>
                            <a href="https://media.vegaslegends.com/visit/?bta=35105&nci=5402" class="btn card-btn text-light">Παίξε τώρα</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 d-flex justify-content-center">
                    <div class="hover-card">
                        <div style="background-image: url('/images/bcgame.png');" class="hover-card-image"></div>
                        <div class="hover-card-title-overlay d-flex flex-column align-items-center justify-content-end">
                            <h2 class="hover-card-title pb-4">BC Games</h2>
                            <p class="hover-card-description pb-2">
                                Up to 20000€ in Casino or Sports
                            </p>
                            <a href="https://media.vegaslegends.com/visit/?bta=35105&nci=5402" class="btn card-btn text-light">Παίξε τώρα</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 d-flex justify-content-center">
                    <div class="hover-card">
                        <div style="background-image: url('images/gangsta-casino-logo.webp');" class="hover-card-image"></div>
                        <div class="hover-card-title-overlay d-flex flex-column align-items-center justify-content-end">
                            <h2 class="hover-card-title pb-4">Gangsta Casino</h2>
                            <p class="hover-card-description pb-2">
                                Bonus up to 500€ + 100 Free Spins
                            </p>
                            <a href="https://gangstacasinoplay.com/d414b83ce" class="btn card-btn text-light">Παίξε τώρα</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 d-flex justify-content-center">
                    <div class="hover-card">
                        <div style="background-image: url('/images/nine-casino.webp');" class="hover-card-image"></div>
                        <div class="hover-card-title-overlay d-flex flex-column align-items-center justify-content-end">
                            <h2 class="hover-card-title pb-4">Nine Casino</h2>
                            <p class="hover-card-description pb-2">
                                Bonus up to 450€ + 250 Free Spins + Daily Cashback up to 25%
                            </p>
                            <a href="https://www.ontrklnk.com/visit/?bta=46140&nci=5768&afp10=Streamer&utm_campaign=bookofslots" class="btn card-btn text-light">Παίξε τώρα</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 d-flex justify-content-center flex-shrink-1">
                    <div class="hover-card">
                        <div style="background-image: url(/images/ritzo-casino.webp);"  class="hover-card-image"></div>
                        <div class="hover-card-title-overlay d-flex flex-column align-items-center justify-content-end">
                            <h2 class="hover-card-title pb-4">Ritzo</h2>
                            <p class="hover-card-description pb-2">
                                Bonus 300% up to 1000€ + 300 Free Spins
                            </p>
                            <a href="https://balancer.ritzogo.com/m99c7a5f3" class="btn card-btn text-light">Παίξε τώρα</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 d-flex justify-content-center">
                    <div class="hover-card">
                        <div style="background-image: url('/images/casino-orca.webp');" class="hover-card-image"></div>
                        <div class="hover-card-title-overlay d-flex flex-column align-items-center justify-content-end">
                            <h2 class="hover-card-title pb-4">Casino Orca</h2>
                            <p class="hover-card-description pb-2">
                                Bonus 100% up to 500€ | CODE: STARS1 before deposit
                            </p>
                            <a href="https://record.mematoaffiliates.com/_xqH7ZY6fwdMWqcfzuvZcQGNd7ZgqdRLk/1/?pg=1" class="btn card-btn text-light">Παίξε τώρα</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 d-flex justify-content-center">
                    <div class="hover-card">
                        <div style="background-image: url('/images/casinostars-io.webp');" class="hover-card-image"></div>
                        <div class="hover-card-title-overlay d-flex flex-column align-items-center justify-content-end">
                            <h2 class="hover-card-title pb-4">Casinostars.io</h2>
                            <p class="hover-card-description pb-2">
                                Bonus 100% up to 300€ | CODE: STARS1 before deposit
                            </p>
                            <a href="https://record.mematoaffiliates.com/_xqH7ZY6fwdPUOsjNOfgKeWNd7ZgqdRLk/1/?pg=1" class="btn card-btn text-light">Παίξε τώρα</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 d-flex justify-content-center opacity-0 d-none d-xl-block">
                    <div class="hover-card">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>


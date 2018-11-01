<style>
    .img{
        width: 100%;
        height:30vh;
        object-fit: cover;
        opacity: .6;
    }
    .background_gray{
        background-color: #F6F6F6;
    }
    .background_white{
        background-color: #ffffff;
        border-top: solid 20px #285964;
        margin-top: -80px;
        margin-bottom: 20px;
        position: relative;
        box-shadow: 0px 2px 5px #00000065;
    }
    .text{
        margin-top: 20px;
        text-align: center;
    }
    .text h2{
        color: #285964;
        font-weight: 700;
        font-size: 2.5rem;
        background: #ffffff;
    }
    .text h2::before , .text h2::after{
        content: "/ / / / / / / / / / / / / / / / / / / / / ";
        padding: 0 2px 0 2px;
        font-size: 1.5rem;
        color: rgb(68, 139, 155);
        opacity: .6;
        font-weight:200;
    }
    @media screen and (max-width: 1196px){
        .img{
            height:100%;
        }
        .background_white {
            border-top: solid 16px #285964;
            margin-top: -80px;
            margin-bottom: 0px;
            position: relative;
            box-shadow: 0px 0px 0px #00000065;
        }
    }
    @media screen and (max-width: 955px){
        .text h2{
            font-size: 1.2rem;
        }
        .text h2::before , .text h2::after{
            content: "/ / / / / / / / / / / / / / ";
            padding: 0 2px 0 2px;
            font-size: 1.2rem;
            color: rgb(68, 139, 155);
            opacity: .6;
            font-weight:200;
        }
    }
    @media screen and (max-width: 740px){
        .text h2::before, .text h2::after{
            content: "/ / / / / / ";
            font-size: 1rem;
        }
    }
    @media screen and (max-width: 360px){
        .text h2::before, .text h2::after {
            content: "/ / / / / / ";
            font-size: 1rem;
        }
        #breadcrumb {
                font-size: 10px;
        }
    }
    </style>
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 hero-inner">
                <div class="hero-heading">
                    <h1>Metapher <br>
                        Growth done right.</h1>
                        <p>Creating limitless growth and monetization opportunities for digital <br> creators worldwide.</p>
                </div>
                <div class="heroForms">
                    <form action="" class="herofieds d-flex">                        
                        <!-- <button type="button" class="btn-primary">Become a Meta Creator</button> -->
                        <div class="input-with-button">
                            <label class="visually-hidden" for="hero-enter-channel">Enter YouTube channel name or URL</label>
                            <div class="input-with-button__input-container">
                                <input name="query" class="input-with-button__input " type="text" id="hero-enter-channel" placeholder="Enter YouTube channel name or URL" autocomplete="off">
                                <button class="input-with-button__cancel" type="button">
                                <img src="https://icons-for-free.com/iconfiles/png/512/video+youtube+icon-1320192294490006733.png" style="height:24px;"/>
                                <span class="visually-hidden">cancel</span>
                                </button>
                            </div>
                            <button class="ui-functional-button input-with-button__submit" type="submit">Start your promotion</button>
                        </div>
                    </form>
                    <div class="heroImages mt-3">
                        <img src="public/markup/img/Group 3601.png" alt="">
                        <img src="public/markup/img/Group 3602.png" alt="">
                    </div>
                </div>
            </div>
            <div class="offset-6"></div>
        </div>
        
    </div>
</section>
<div class="hero-bg-small"></div>
<style>
    .input-with-button {
        display: flex;
        padding-top: 4px;
        padding-right: 4px;
        padding-bottom: 4px;
        height: 66px;
        border-radius: 16px;
        background-color: #fff;
        box-shadow: 0 3px 16px rgba(110,125,177,.28);
        transition: border-color .2s ease-out,box-shadow .2s ease-out;
    }
    .visually-hidden {
        position: absolute;
        overflow: hidden;
        clip: rect(0 0 0 0);
        margin: -1px;
        padding: 0;
        width: 1px;
        height: 1px;
        border: 0;
        white-space: nowrap;
        -webkit-clip-path: inset(100%);
        clip-path: inset(100%);
    }
    .input-with-button__input-container {
        position: relative;
        width: 100%;
    }
    .input-with-button__input {
        font-size: 16px;
        line-height: 100%;
        padding: 10px 40px 10px 66px;
        width: 100%;
        height: 100%;
        border: 1px solid transparent;
        border-radius: 12px;
        background-color: #fff;
        color: #1d1b28;
        text-overflow: ellipsis;
        transition: box-shadow .2s ease-out;
    }
    .input-with-button__cancel {
        margin: 0;
        padding: 0;
        outline: none!important;
        border: none;
        background: none;
        cursor: pointer;
        color: #dee1ff;
        transition: color .2s ease-out;
        position: absolute;
        top: 0;
        right: 0;
        display: none;
        align-items: center;
        width: 40px;
        height: 100%;
    }
    .input-with-button__submit {
        margin-top: 12px;
        width: 100%;
    }
    .ui-functional-button {
        font-weight: 500;
        font-size: 16px;
        line-height: 140%;
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 16px;
        min-height: 58px;
        padding: 17px 30px;
        background-color: #8e56e9;
        background-image: linear-gradient(90deg,#a36bff 1%,#8732f4);
        box-shadow: 0 4px 12px rgba(142,86,233,.4);
        border: none;
        border-radius: 12px;
        color: #fff;
        cursor: pointer;
        transition: box-shadow .2s ease-out,background-color .2s ease-out,color .2s ease-out;
    }
    @media only screen and (min-width: 768px){
        .input-with-button__submit {
            flex-shrink: 0;
            margin-top: 0;
            min-width: 210px;
            width: auto;
            height: auto;
        }
    }

</style>
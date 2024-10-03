<div class="container" >
    <button class="events roam" data-text="Events" data-aos="fade-down">
        <div class="bloco-one">
            <img src="imagens/lista-de-controle.png" alt="">
            <span>Avaliação</span>
            <p>O endocrinologista avalia histórico, realiza exame físico, solicita exames, dá diagnóstico e propõe tratamento com acompanhamento regular.

            </p>
        </div>
    </button>



    <button class="events roam" data-text="Events" data-aos="fade-up">
        <div class="bloco-one">
            <img src="imagens/teste-de-sangue.png" alt="">
            <span>Exame</span>
            <p>Exames endocrinológicos analisam hormônios e marcadores. Com base neles, o endocrinologista diagnostica e propõe tratamento, ajustando conforme necessário.</p>
        </div>
    </button>





    <button class="events roam" data-text="Events" data-aos="fade-down">
        <div class="bloco-one">
            <img src="imagens/retorno-do-vizitante.png" alt="">
            <span>Retorno</span>
            <p>Após análise do exame endocrinológico, o médico oferece orientações específicas e, se necessário, faz ajustes no tratamento. </p>
        </div>
    </button>
</div>


<style>
    .container {
        display: flex;
        margin-top: 3rem;
        justify-content: center;
    }

    .label {
        width: 7rem;
        height: 5rem;
        margin: 1rem;
        text-align: left;
        font-size: 1rem;
        display: flex;
        align-items: center;
    }

    button {
        position: relative;
        /* width: 35%; */
        padding: 5px 11px;
        margin: 15px;
        cursor: pointer;
        background: white;
        color: #fb570d;
        border-radius: 1rem;
        box-shadow: 0 0.2rem 20rem #aaaaaa2e;
        overflow: hidden;

        & svg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
        }

        &.events::before {
            background-color: #fb570d;
        }

        &.groups::before {
            background: #4ECDC4;
        }

        &.pages::before {
            background: #FF9F1C;
        }
    }
    

    button.roam {
        &::before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            transform: scale(1.42) rotate(-45deg) transformX(-100%);
            visibility: hidden;
        }

        &:hover {
            color: white;

            & svg {
                transform-origin: center;
                transform: translate(-50%, -50%) scale(1.1);
            }
        }

        &:hover::before {
            visibility: visible;
            transform-origin: center;
            animation: roam 1s;
        }
    }

    button.float {
        &::before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            transform: scale(1.42) rotate(-45deg) transformX(-100%);
            visibility: hidden;
        }

        &:hover {
            color: white;

            & svg {
                transition: 0.33s ease;
                transform: translate(-50%, -75%) scale(1.1);
            }
        }

        &:hover::before {
            visibility: visible;
        }

        &::after {
            position: absolute;
            color: white;
            content: attr(data-text);
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            transform: translateY(100%);
            visibility: hidden;
        }

        &:hover::after {
            visibility: visible;
            transform: translateY(70%);
            transition: 0.33s;
        }
    }

    @keyframes roam {
        0% {
            transform: scale(1.42) rotate(-45deg) translateX(-100%);
        }

        33% {
            transform: scale(1.42) rotate(-45deg) translateX(0%);
        }

        60% {
            transform: scale(1.42) rotate(-45deg) translateX(30%);
        }

        100% {
            transform: scale(1.42) rotate(-45deg) translateX(0%);
        }

        100% {
            transform: scale(1.42) rotate(-45deg) translateX(0);
        }
    }

    button.border-effect {
        border-radius: 0;

        & .btn-borders {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;

            & [class^=border] {
                position: absolute;
            }
        }

        &.events .btn-borders [class^=border] {
            background: #FF6B6B;
        }

        &.groups .btn-borders [class^=border] {
            background: #4ECDC4;
        }

        &.pages .btn-borders [class^=border] {
            background: #FF9F1C;
        }

        & .border-top {
            top: 0;
            width: 100%;
            height: 1.75px;
            transform: scaleX(0);
            transform-origin: left;
        }

        & .border-right {
            right: 0;
            width: 1.75px;
            height: 100%;
            transform: scaleY(0);
            transform-origin: bottom;
        }

        & .border-bottom {
            bottom: 0;
            width: 100%;
            height: 1.75px;
            transform: scaleX(0);
            transform-origin: left;
        }

        & .border-left {
            left: 0;
            width: 1.75px;
            height: 100%;
            transform: scaleY(0);
            transform-origin: bottom;
        }

        /* unhover transition  */
        & .border-left,
        & .border-bottom {
            transition: 0.25s 0.15s cubic-bezier(0.19, 1, 0.22, 1);
        }

        & .border-right,
        & .border-top {
            transition: 0.25s cubic-bezier(0.19, 1, 0.22, 1);
        }

        /* hover transition */
        &:hover .border-top,
        &:hover .border-bottom {
            transform: scaleX(1);
        }

        &:hover .border-left,
        &:hover .border-right {
            transform: scaleY(1);
        }

        &:hover .border-left,
        &:hover .border-bottom {
            transition: 0.25s cubic-bezier(0.19, 1, 0.22, 1);
        }

        &:hover .border-right,
        &:hover .border-top {
            transition: 0.25s 0.15s cubic-bezier(0.19, 1, 0.22, 1);
        }
    }

    button.pulse {
        border-radius: 2.5rem;

        &:hover {
            box-shadow: 0 0 0 1rem transparent;
            animation: pulse 1s;
        }
    }

    @keyframes pulse {
        from {
            box-shadow: 0 0 0 0 #AAAAAA;
        }
    }
</style>
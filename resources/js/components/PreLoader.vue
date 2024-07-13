
<template>
    <transition name="fade">
        <div class="preloader bg-secondary">
            <div class="loading">
                <span data-text="P">P</span>
                <span data-text="O">O</span>
                <span data-text="P">P</span>
                <span data-text="L">L</span>
                <span data-text="A">A</span>
                <span data-text="R">R</span>
            </div>
        </div>
    </transition>
</template>
<style lang="scss" scoped>
.preloader {
    height: 100vh;
    position: fixed;
    z-index: 99999;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.loading {
        gap: 20px;
        display: flex;
        font-size: 84px;
        font-weight: 800;
        text-align: center;
        align-items: center;
        span {
            margin: 0 -.05em;
            display: inline-block;
        }
        span {
            position: relative;
            color: rgba(#fff, .2);
            &::after {
                top: 0;
                left: 0;
                opacity: 0;
                position: absolute;
                transform: scale(1.5);
                color: #fff;
                content: attr(data-text);
                animation: loading 3s infinite;
            }
            @for $i from 1 through 6 {
                &:nth-child(#{$i+1})::after {
                    animation-delay: #{$i*.1}s;
                }
            }
        }
    }
    @keyframes loading {
        0%, 75%, 100% {
            transform: scale(1.5);
            opacity: 0;
        }
        25%, 50% {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>

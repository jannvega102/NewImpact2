<script setup>
import { reactive, onMounted, ref, inject, defineEmits } from "vue";


const $emits = defineEmits(["show:menu", "show:content"]);

const activeMenu = ref(false);
const showMenu = (event) => {
    if (activeMenu.value == event) {
        event = false;
        activeMenu.value = event;
    } else {
        activeMenu.value = event;
    }
    //console.log(activeMenu.value);
    $emits("show:menu", event);
};
</script>

<template>
    <!--Sidebar-->
    <!--Templates-->
    <div
        id="selected_trial"
        class="bg-gray-800 w-[6rem] h-[100vh] fixed top-[0px] pt-[64px] z-[10]"
    >
        <button
            @click="showMenu('templates')"
            :class="{ 'bg-[gray]': activeMenu == 'templates' }"
            type="button"
            style="width: 100%"
            class="hover:bg-orange-700"
        >
            <svg
                class="pt-4 h-[10vh] text-gray-800 dark:text-white"
                style="width: 100%; max-width: 60px; margin: auto"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="white"
                viewBox="0 0 24 24"
            >
                <path
                    fill-rule="evenodd"
                    d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z"
                    clip-rule="evenodd"
                />
            </svg>
            <a class="text-sm text-white text-[1.5vmin]">Template</a>
        </button>

        <!--Select Demo-->
        <button
            @click="showMenu('demo')"
            :class="{ 'bg-[gray]': activeMenu == 'demo' }"
            type="button"
            style="width: 100%"
            class="hover:bg-orange-700"
        >
            <svg
                class="pt-4 w-10 h-[10vmin] text-gray-800 dark:text-white"
                style="width: 100%; max-width: 60px; margin: auto"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="white"
                viewBox="0 0 24 24"
            >
                <path
                    fill-rule="evenodd"
                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                    clip-rule="evenodd"
                />
            </svg>
            <a class="text-sm text-white">Select Trial</a>
        </button>
        <!--Trials-->

        <button
            @click="showMenu('trial')"
            :class="{ 'bg-[gray]': activeMenu == 'trial' }"
            type="button"
            style="width: 100%"
            class="hover:bg-orange-700"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                style="width: 100%; max-width: 50px; margin: auto"
                class="pt-4 w-8 h-[10vh] text-gray-800 dark:text-white"
                fill="white"
                viewBox="0 0 122.88 122.88"
            >
                <path
                    d="M17.89 0h88.9c8.85 0 16.1 7.24 16.1 16.1v90.68c0 8.85-7.24 16.1-16.1 16.1H16.1c-8.85 0-16.1-7.24-16.1-16.1v-88.9C0 8.05 8.05 0 17.89 0zm14.99 31.06H90v15.02H70.82v45.74H52.06V46.08H32.88V31.06z"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                />
            </svg>
            <a class="text-md text-white text-[1.5vmin]">Target</a>
        </button>
        <!--Redirect-->
        <button
            @click="showMenu('redirect')"
            :class="{ 'bg-[gray]': activeMenu == 'redirect' }"
            type="button"
            style="width: 100%"
            class="hover:bg-orange-700"
        >
            <svg
                id="Layer_1"
                data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg"
                style="width: 100%; max-width: 50px; margin: auto"
                class="pt-4 w-9 h-[10vh] text-gray-800 dark:text-white"
                fill="white"
                viewBox="0 0 122.88 122.88"
            >
                <path
                    d="M61.44,0A61.46,61.46,0,1,1,18,18,61.23,61.23,0,0,1,61.44,0ZM72.91,41.27a5.47,5.47,0,1,1,7.3-8.16L93.72,45.23A5.48,5.48,0,0,1,94.15,53l-.35.35h0l-13,12.12a5.48,5.48,0,0,1-7.47-8L76.1,54.8H62.39a5.5,5.5,0,0,1,0-11H75.75l-2.84-2.54Zm-30.5,16.1a5.47,5.47,0,1,1,7.3,8.16l-2.83,2.54H61.15a5.5,5.5,0,0,1,0,11H46.53l2.8,2.6a5.48,5.48,0,1,1-7.47,8l-13-12.11h0l-.35-.36a5.47,5.47,0,0,1,.42-7.73L42.41,57.37ZM96.86,26a50.08,50.08,0,1,0,14.68,35.43A49.95,49.95,0,0,0,96.86,26Z"
                />
            </svg>
            <a class="text-sm text-white text-[1.5vmin]">Redirect</a>
        </button>

        <button
            @click="showMenu('instructions')"
            :class="{ 'bg-[gray]': activeMenu == 'instructions' }"
            type="button"
            style="width: 100%"
            class="hover:bg-orange-700"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 122.88 122.88"
                style="width: 100%; max-width: 55px; margin: auto"
                class="pt-4 w-11 h-[10vh] text-gray-800 dark:text-white"
                fill="white"
            >
                <g>
                    <path
                        d="M61.44,9.23c-1.85,0-3.64,0.08-5.35,0.25c-1.71,0.17-3.44,0.42-5.17,0.77c-1.72,0.34-3.39,0.77-5,1.26 c-1.59,0.49-3.16,1.07-4.7,1.72l-0.1,0.05l0,0c-1.63,0.7-3.18,1.45-4.67,2.25c-1.5,0.81-2.94,1.68-4.31,2.6 c-1.38,0.93-2.72,1.92-3.99,2.97c-1.27,1.05-2.5,2.16-3.68,3.35l-0.04,0.04c-1.18,1.18-2.29,2.4-3.33,3.66 c-1.05,1.28-2.04,2.61-2.97,3.99c-0.92,1.36-1.78,2.8-2.59,4.3c-0.8,1.49-1.56,3.05-2.26,4.67l-0.05,0.11l0,0l-0.07,0.14 c-0.63,1.5-1.19,3.04-1.67,4.61c-0.49,1.59-0.9,3.23-1.24,4.93c-0.35,1.73-0.6,3.45-0.77,5.17c-0.17,1.72-0.25,3.5-0.25,5.35 c0,1.85,0.08,3.64,0.25,5.35c0.17,1.71,0.42,3.44,0.77,5.17c0.35,1.72,0.77,3.39,1.27,5c0.49,1.57,1.05,3.13,1.7,4.66 c0.04,0.07,0.07,0.14,0.1,0.21c0.69,1.6,1.43,3.13,2.23,4.6c0.81,1.5,1.68,2.94,2.59,4.3c0.93,1.39,1.92,2.72,2.98,4 c1.02,1.24,2.11,2.44,3.26,3.59c0.07,0.06,0.13,0.12,0.19,0.19c1.16,1.16,2.36,2.24,3.59,3.26c1.28,1.05,2.61,2.04,3.99,2.97 c1.36,0.92,2.8,1.78,4.3,2.59c1.49,0.8,3.05,1.56,4.67,2.26l0.21,0.1c1.52,0.64,3.07,1.2,4.67,1.69c1.58,0.49,3.23,0.9,4.92,1.24 c1.73,0.35,3.45,0.6,5.17,0.77c1.72,0.17,3.5,0.25,5.35,0.25c1.85,0,3.64-0.08,5.35-0.25c1.71-0.17,3.44-0.42,5.17-0.77 c1.72-0.35,3.39-0.77,5-1.27c1.59-0.49,3.16-1.07,4.71-1.73l0.09-0.04l0-0.01c1.63-0.7,3.18-1.45,4.67-2.25 c1.5-0.81,2.94-1.68,4.31-2.6c1.38-0.93,2.72-1.92,3.99-2.97c1.25-1.03,2.45-2.12,3.62-3.29c0.06-0.06,0.11-0.12,0.18-0.18 c1.15-1.15,2.23-2.35,3.25-3.58c1.05-1.28,2.05-2.61,2.98-4c0.92-1.36,1.78-2.8,2.59-4.3c0.8-1.49,1.56-3.04,2.26-4.67l0.1-0.22 c0.64-1.51,1.2-3.06,1.69-4.65c0.49-1.59,0.9-3.23,1.24-4.93c0.35-1.73,0.6-3.45,0.77-5.17c0.17-1.72,0.25-3.5,0.25-5.35 c0-1.85-0.08-3.64-0.25-5.35c-0.17-1.71-0.42-3.44-0.77-5.17c-0.35-1.72-0.77-3.39-1.27-5c-0.49-1.59-1.07-3.16-1.73-4.71 l-0.04-0.09l0,0c-0.7-1.63-1.45-3.18-2.25-4.67c-0.81-1.5-1.68-2.94-2.59-4.3c-0.93-1.38-1.92-2.72-2.97-3.99 c-1.02-1.24-2.12-2.45-3.28-3.61c-0.07-0.06-0.13-0.12-0.18-0.18c-1.16-1.16-2.35-2.24-3.59-3.26c-1.28-1.05-2.61-2.04-3.99-2.97 c-1.37-0.92-2.8-1.78-4.3-2.59c-1.49-0.8-3.04-1.56-4.67-2.25l-0.19-0.09c-1.52-0.64-3.08-1.21-4.68-1.7 c-1.58-0.49-3.23-0.9-4.93-1.24c-1.73-0.35-3.45-0.6-5.17-0.77C65.08,9.31,63.29,9.23,61.44,9.23L61.44,9.23z M63.34,31.17 c2.19,0,3.91,0.63,5.16,1.88c1.24,1.25,1.87,2.96,1.87,5.17c0,2.24-1.07,4.22-3.21,5.97c-2.16,1.74-4.66,2.62-7.52,2.62 c-2.14,0-3.85-0.6-5.16-1.8c-1.31-1.22-1.96-2.79-1.96-4.75c0-2.47,1.07-4.59,3.19-6.4C57.82,32.06,60.37,31.17,63.34,31.17 L63.34,31.17L63.34,31.17z M75.55,91.71H47.33v-4.75h5.3V57.95h-5.3v-3.78h13.19c3.33,0,6.61-0.4,9.85-1.22v34.01h5.18L75.55,91.71 L75.55,91.71L75.55,91.71z M49.12,1.2c1.96-0.39,3.99-0.69,6.08-0.89C57.29,0.1,59.37,0,61.44,0c2.07,0,4.15,0.1,6.24,0.31 c2.09,0.2,4.12,0.5,6.08,0.89c1.94,0.39,3.88,0.88,5.82,1.48c1.88,0.58,3.74,1.26,5.58,2.04l0.19,0.07l0,0l0.06,0.02 c1.85,0.8,3.65,1.67,5.38,2.61c1.71,0.93,3.4,1.95,5.07,3.07c1.63,1.1,3.21,2.27,4.73,3.52c1.52,1.25,2.97,2.56,4.34,3.95 c1.38,1.38,2.7,2.83,3.95,4.34c1.25,1.52,2.42,3.09,3.52,4.73c1.09,1.63,2.11,3.32,3.06,5.06l0,0l0.01,0 c0.94,1.74,1.82,3.54,2.61,5.39c0.02,0.05,0.04,0.1,0.06,0.15c0.78,1.83,1.46,3.7,2.05,5.6c0.61,1.96,1.11,3.92,1.5,5.89 c0.39,1.96,0.69,3.99,0.89,6.08c0.2,2.09,0.3,4.17,0.3,6.24c0,2.07-0.1,4.15-0.31,6.24c-0.2,2.09-0.5,4.12-0.89,6.08 c-0.39,1.94-0.88,3.88-1.48,5.82c-0.58,1.89-1.27,3.76-2.05,5.62l-0.04,0.09l0,0l-0.05,0.11c-0.8,1.85-1.67,3.65-2.61,5.38 c-0.93,1.71-1.95,3.4-3.07,5.07c-1.1,1.63-2.27,3.21-3.52,4.73c-1.25,1.52-2.56,2.96-3.95,4.34c-1.38,1.38-2.83,2.7-4.35,3.95 c-1.52,1.25-3.09,2.42-4.72,3.51c-1.63,1.09-3.32,2.11-5.06,3.06c-1.78,0.96-3.57,1.84-5.39,2.62c-0.05,0.02-0.1,0.04-0.16,0.06 c-1.83,0.78-3.7,1.46-5.6,2.05c-1.96,0.61-3.92,1.11-5.88,1.5c-1.96,0.39-3.99,0.69-6.08,0.89c-2.09,0.2-4.17,0.3-6.24,0.3 s-4.15-0.1-6.24-0.3c-2.09-0.2-4.12-0.5-6.08-0.89c-1.94-0.39-3.88-0.88-5.82-1.48c-1.89-0.58-3.76-1.27-5.61-2.05l-0.2-0.08l0,0 c-1.85-0.8-3.65-1.67-5.38-2.61c-1.71-0.93-3.4-1.95-5.07-3.07c-1.63-1.09-3.21-2.27-4.72-3.51c-1.52-1.25-2.97-2.57-4.35-3.95 c-1.38-1.38-2.7-2.83-3.95-4.34c-1.25-1.52-2.42-3.1-3.52-4.73c-1.09-1.63-2.11-3.32-3.06-5.06c-0.97-1.78-1.84-3.58-2.62-5.4 c-0.02-0.05-0.04-0.1-0.06-0.15c-0.78-1.83-1.46-3.7-2.05-5.6c-0.61-1.96-1.11-3.93-1.5-5.89c-0.39-1.96-0.69-3.99-0.89-6.08 C0.1,65.59,0,63.51,0,61.44c0-2.07,0.1-4.15,0.31-6.24c0.2-2.09,0.5-4.12,0.89-6.08c0.39-1.94,0.88-3.88,1.48-5.82 c0.58-1.88,1.26-3.74,2.04-5.59l0.09-0.23l0,0c0.8-1.85,1.67-3.65,2.61-5.38c0.93-1.71,1.95-3.4,3.07-5.07 c1.1-1.63,2.27-3.21,3.52-4.73c1.25-1.52,2.56-2.96,3.95-4.34c1.38-1.38,2.83-2.7,4.34-3.95c1.52-1.25,3.09-2.42,4.73-3.52 c1.67-1.12,3.36-2.14,5.07-3.07l0.13-0.06c1.73-0.94,3.48-1.78,5.26-2.55c0.05-0.02,0.1-0.04,0.15-0.06 c1.83-0.78,3.7-1.46,5.6-2.05C45.19,2.09,47.15,1.59,49.12,1.2L49.12,1.2z"
                    />
                </g>
            </svg>
            <a class="text-sm text-white text-[1.5vmin]">Instructions</a>
        </button>

        <button
            @click="showMenu('analysis')"
            :class="{ 'bg-[gray]': activeMenu == 'analysis' }"
            type="button"
            style="width: 100%"
            class="hover:bg-orange-700 text-white"
        >
            <svg
                version="1.1"
                id="analyse"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 256 256"
                xml:space="preserve"
                fill="#000000"
            >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        class="st1"
                        d="M242.648,169.707L209.96,137.02c-3.08-3.08-6.926-5.119-11.108-5.938c5.19-9.792,7.704-20.873,7.184-32.161 c-0.205-4.445-0.877-8.814-1.989-13.044c0.422-0.232,0.827-0.499,1.211-0.798c0.115-0.089,0.198-0.154,0.593-0.154 c0,0,0.375,0.01,0.5,0.01c2.375,0,4.665-0.918,6.385-2.569c1.81-1.738,2.834-4.14,2.834-6.649V64.943 c0-4.211-2.867-7.89-6.947-8.934l-0.198-0.055c-0.395-0.11-0.991-0.277-1.771-0.415c-1.467-0.25-2.272-1.099-2.393-2.525 c-0.03-0.362-0.087-1.035,0.923-2.339c2.801-3.614,2.529-8.735-0.638-12.032l-6.79-7.066c-1.794-1.867-4.212-2.831-6.649-2.831 c-1.813,0-3.636,0.533-5.221,1.624c-0.828,0.569-1.688,0.87-2.487,0.87c-2,0-2.716-1.833-2.963-3.372 c-0.72-4.468-4.576-7.753-9.103-7.753l-5.035,0.007c-1.335,0-2.676-0.004-4.038-0.021c-0.031,0-0.101,0-0.133,0 c-5.125,0-9.176,3.145-10.571,8.204c-0.385,1.393-1.275,2.192-2.446,2.192c-0.58,0-1.187-0.203-1.812-0.608 c-1.931-1.251-3.976-1.885-6.074-1.885c-1.913,0-4.748,0.531-7.369,3.043c-0.786,0.749-1.576,1.491-2.368,2.235l-1.242,1.169 c-1.985,1.872-2.994,4.473-2.887,7.087c-10.421,2.806-19.974,8.303-27.81,16.139c-5.548,5.548-9.831,11.89-12.85,18.662 c-2.987-0.783-5.557-2.705-7.443-5.576c-2.976-4.511-6.987-5.184-9.114-5.184c-1.414,0-2.84,0.285-4.247,0.853 c-4.493,1.818-8.992,3.621-13.49,5.423l-3.126,1.253c-5.222,2.095-7.787,7.082-6.536,12.7c0.889,3.999,0.298,7.166-1.859,9.969 c-2.783,3.618-5.754,5.232-9.632,5.232c-1.12,0-2.337-0.138-3.611-0.408c-0.724-0.154-1.479-0.232-2.243-0.232 c-3.085,0-7.173,1.328-9.39,5.053c-3.464,5.821-6.097,12.094-8.049,19.176c-1.144,4.153,0.739,8.544,4.537,10.577 c6.573,3.52,7.389,7.937,7.365,11.392c-0.026,3.709-0.976,7.972-7.822,11.469c-4.236,2.164-6.13,7.197-4.371,11.617l6.537,16.43 c1.429,3.594,4.884,5.814,8.566,5.814c0.935,0,1.884-0.144,2.819-0.443c2.134-0.685,4.097-1.032,5.836-1.032 c3.205,0,5.743,1.146,8.229,3.72c2.651,2.742,4.987,6.587,2.206,14.313c-1.65,4.584,0.552,9.662,5.027,11.589l17.493,7.54 c1.186,0.511,2.423,0.754,3.646,0.754c3.217,0,6.316-1.691,8.005-4.642l0.351-0.603c0.313-0.535,0.508-0.887,0.673-1.218 c2.308-4.59,6.135-7.119,10.776-7.119c1.027,0,2.094,0.127,3.179,0.379c4.251,0.986,6.802,3.193,8.271,7.156 c1.34,3.616,4.788,6.017,8.645,6.017h0.743c1.039,0,2.069-0.176,3.049-0.519c0.408-0.144,0.819-0.278,1.229-0.414 c1.102-0.364,2.351-0.777,3.675-1.34c3.393-1.447,6.772-2.928,10.152-4.406l4.104-1.795c4.341-1.892,6.508-6.774,5.101-11.242 c-0.082-0.363-0.215-0.935-0.432-1.565c-1.751-5.164-0.946-9.127,2.61-12.85c2.477-2.592,5.081-3.799,8.196-3.799 c1.308,0,2.73,0.215,4.223,0.636c1.086,0.309,2.171,0.464,3.223,0.464c0.001,0,0.001,0,0.001,0c3.467,0,7.879-1.836,9.863-6.997 c0,0,4.553-11.869,5.83-15.188c1.384-3.592,0.905-7.246-1.116-10.117c1.708-0.735,3.384-1.545,5.021-2.431 c0.839,4.065,2.841,7.887,5.899,10.946l32.686,32.687c4.097,4.095,9.542,6.352,15.335,6.352c5.795,0,11.241-2.257,15.334-6.352 C251.103,191.919,251.103,178.162,242.648,169.707z"
                    ></path>
                    <path
                        class="st0"
                        d="M153.97,110.806c2.577,4.799,4.737,9.76,6.248,15.08c-1.426,0.807-2.721,1.724-3.91,2.729 c-3.979,1.938-8.379,2.967-12.938,2.967c-7.905,0-15.338-3.079-20.929-8.67c-11.54-11.541-11.54-30.318,0-41.859 c0.063-0.063,0.13-0.122,0.192-0.185c0.888,0.373,1.773,0.75,2.662,1.12c1.264,0.527,0.868,1.412,0.675,2.31 c-1.969,9.149,2.176,18.491,10.317,23.097c4.759,2.692,9.856,3.581,15.207,2.3C152.794,109.383,153.38,109.71,153.97,110.806z M159.863,163.676c-1.073-0.586-2.065-1.263-2.996-1.995c-4.402,0.995-8.928,1.515-13.497,1.515c-9.487,0-18.637-2.156-26.912-6.216 c-4.115,11.417-15.073,19.552-27.918,19.485c-16.342-0.086-29.367-13.294-29.29-29.701c0.069-14.638,10.904-26.702,25.032-28.832 c-1.374-5.137-2.098-10.483-2.098-15.947c0-5.73,0.796-11.333,2.305-16.697c-4.987-1.273-9.627-4.424-12.931-9.452 c-0.623-0.944-1.153-1.286-2.207-0.861c-5.542,2.242-11.094,4.462-16.642,6.687c-1.018,0.408-1.229,0.976-0.969,2.144 c1.414,6.36,0.462,12.375-3.551,17.59c-5.708,7.419-13.246,10.177-22.469,8.219c-0.554-0.118-1.553,0.119-1.792,0.52 c-3.142,5.279-5.434,10.922-7.083,16.911c7.876,4.217,12.294,10.691,12.232,19.584c-0.063,8.949-4.604,15.402-12.846,19.613 c2.21,5.557,4.37,10.978,6.538,16.431c9.166-2.943,17.088-1.588,23.512,5.058c6.472,6.695,7.535,14.721,4.251,23.842 c5.863,2.525,11.668,5.029,17.495,7.541c0.431-0.754,0.627-1.06,0.788-1.382c4.692-9.334,14.053-13.959,24.273-11.58 c7.11,1.647,12.238,5.927,14.834,12.934c0.248,0,0.495,0,0.743,0c1.446-0.507,2.926-0.934,4.334-1.532 c4.744-2.024,9.462-4.111,14.192-6.173c-0.212-0.563-0.177-0.625-0.19-0.681c-0.054-0.241-0.108-0.483-0.188-0.717 c-2.82-8.316-1.351-15.871,4.675-22.177c5.922-6.199,13.311-8.006,21.599-5.665c1.137,0.322,1.612-0.045,1.967-0.967 c1.945-5.068,3.886-10.135,5.835-15.202C161.321,164.85,160.961,164.274,159.863,163.676z M236.129,193.855 c-2.434,2.435-5.626,3.651-8.814,3.651c-3.192,0-6.381-1.217-8.816-3.651l-32.686-32.688c-3.614-3.614-4.539-8.892-2.787-13.366 l-5.177-5.177c-9.563,8.031-21.52,12.413-34.154,12.413c-14.214,0-27.578-5.534-37.628-15.585c-20.748-20.749-20.748-54.51,0-75.26 c10.051-10.051,23.415-15.587,37.63-15.587c14.213,0,27.578,5.535,37.629,15.587c19.489,19.492,20.667,50.463,3.54,71.346 l5.211,5.212c4.475-1.75,9.753-0.825,13.365,2.787l32.688,32.688C240.997,181.094,240.997,188.987,236.129,193.855z M170.281,75.237 c-7.102-7.101-16.543-11.011-26.587-11.011c-10.043,0-19.483,3.911-26.583,11.011c-14.658,14.659-14.658,38.511,0,53.169 c7.101,7.102,16.542,11.013,26.583,11.013c10.041,0,19.483-3.911,26.585-11.013C184.938,113.748,184.939,89.896,170.281,75.237z M165.101,86.92c-8.104-0.035-14.813-6.133-15.945-13.977c-1.885-0.372-3.818-0.563-5.781-0.563c-5.24,0-10.268,1.361-14.692,3.899 c3.263,1.491,5.386,4.223,6.308,8.016c0.995,4.089-0.254,7.688-3.113,11.046c2.252,2.389,4.474,4.744,6.71,7.113 c4.272-3.405,8.648-4.258,13.312-2.107c4.665,2.152,6.682,6.167,6.996,11.391c3.591,0,7.012,0,10.41,0 c0.691-3.421,1.928-6.108,3.598-8.021c0.345-5.923-1.077-11.928-4.266-17.153C167.498,86.799,166.318,86.927,165.101,86.92z M186.657,58.699c5.547,5.547,9.904,12.038,12.937,19.106c1.837-1.43,4.065-2.198,6.756-2.089c0-3.59,0-7.18,0-10.772 c-0.416-0.106-0.827-0.242-1.25-0.317c-5.6-0.957-9.55-5.205-10.025-10.832c-0.279-3.286,0.813-6.176,2.821-8.767 c-2.357-2.455-4.602-4.79-6.787-7.063c-7.854,5.403-18.096,1.801-19.776-8.632c-3.007,0-6.089,0.024-9.168-0.015 c-1.052-0.011-1.444,0.426-1.723,1.438c-2.248,8.142-11.061,11.476-18.155,6.868c-0.842-0.545-1.388-0.563-2.072,0.093 c-1.21,1.153-2.431,2.292-3.646,3.438c2.247-0.248,4.517-0.386,6.809-0.386C159.723,40.77,175.096,47.137,186.657,58.699z"
                    ></path>
                </g>
            </svg>
            <a class="text-sm text-white text-[1.5vmin]">Analysis</a>
        </button>
    </div>

    <div
        class="relative maincon w-full pl-[6rem] flex flex-col gap-1 grow-[1] h-[calc(100vh-5rem)]"
    >
        <div class="bg-white w-full h-full shadow-md z-2 relative"></div>
    </div>
</template>
<style type="text/css">
.st0 {
    fill: #1f2937;
}
.st1 {
    fill: #ffffff;
}
</style>

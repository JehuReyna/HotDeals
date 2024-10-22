<div class="dropdown">
    <button class="dropbtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="white" class="bi bi-card-list"
            viewBox="0 0 16 16">
            <path
                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z">
            </path>
            <path
                d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0">
            </path>
        </svg>
    </button>
    <div class="dropdown-content">
        <a href="/perfil">
            <div class="tooltip-container">
                <span class="tooltip">Perfil</span>
                <span class="text">
                    <div class="borde-back">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1">
                                </path>
                            </svg>
                        </div>
                    </div>
                </span>
            </div>
        </a> {{-- mostrará el perfil del usuario, solo se verá cuando tenga un perfil. --}}
        <a href="/seguidos">
            <div class="tooltip-container">
                <span class="tooltip">Seguidos</span>
                <span class="text">
                    <div class="borde-back">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white"
                                class="bi bi-person-heart" viewBox="0 0 16 16">
                                <path
                                    d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </span>
            </div>
        </a> {{-- mostrará a los vendedores que siguen y si se encuentran vendiendo --}}
        <a href="/informacion">
            <div class="tooltip-container">
                <span class="tooltip">Información</span>
                <span class="text">
                    <div class="borde-back">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white"
                                class="bi bi-info-circle" viewBox="0 0 16 16">

                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16">
                                </path>
                                <path
                                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0">
                                </path>
                            </svg>
                        </div>
                    </div>
                </span>
            </div>
        </a> {{-- mostrará información referente a la página/aplicación (acerca de nosotros, terminos y condiciones, preguntas frecuentes) --}}
    </div>
</div>

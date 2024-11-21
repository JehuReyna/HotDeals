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

        {{-- mostrará el perfil del usuario, solo se verá cuando tenga un perfil. --}}
        @if (auth()->check())
            <a href="/perfil">
                <div class="tooltip-container">
                    <span class="tooltip">{{ auth()->user()->user }}</span>
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
            </a>

            {{-- Esto solo lo vera el usuario de tipo admin --}}

            @if (auth()->user()->role == 'admin')
                <a href="/admin">
                    <div class="tooltip-container">
                        <span class="tooltip">Panel</span>
                        <span class="text">
                            <div class="borde-back">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" 
                                        fill="white" class="bi bi-clipboard2-pulse-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5">
                                        </path>
                                        <path
                                            d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585q.084.236.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5q.001-.264.085-.5M9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </span>
                    </div>
                </a>
            @endif

            {{-- mostrará a los vendedores que su espacio de venta, solo lo podrán ver los vendedores --}}
            
                <a href="/venta">
                    <div class="tooltip-container">
                        <span class="tooltip">Tienda</span>
                        <span class="text">
                            <div class="borde-back">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white "
                                        class="bi bi-shop" viewBox="0 0 16 16">
                                        <path
                                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </span>
                    </div>
                </a>
            


            {{-- mostrará a los vendedores que siguen y si se encuentran vendiendo --}}

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
            </a>

            {{-- mostrará información referente a la página/aplicación (acerca de nosotros, terminos y condiciones, preguntas frecuentes) --}}

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
            </a>

            {{-- Cerrar sesión --}}

            <a href="{{ route('login.destroy') }}">
                <div class="tooltip-container">
                    <span class="tooltip">Salir</span>
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
            </a>
        @else
            <a href="/cuenta">
                <div class="tooltip-container">
                    <span class="tooltip">Registrar</span>
                    <span class="text">
                        <div class="borde-back">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white"
                                    class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </span>
                </div>
            </a>
            <a href="{{ route('login.index') }}">
                <div class="tooltip-container">
                    <span class="tooltip">Iniciar sesion</span>
                    <span class="text">
                        <div class="borde-back">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white"
                                    class="bi bi-person-fill-check" viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0">
                                    </path>
                                    <path
                                        d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </span>
                </div>
            </a>
        @endif
    </div>
</div>
</div>

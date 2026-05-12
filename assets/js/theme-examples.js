/**
 * Ejemplos de uso - View Transition Theme Change
 * Este archivo contiene ejemplos de cómo implementar el cambio de tema con transición
 */

// ========================================
// EJEMPLO 1: Cambiar tema con un botón
// ========================================

// HTML:
// <button id="theme-toggle" class="theme-toggle-btn">
//   <i class="fa fa-moon"></i> Cambiar Tema
// </button>

// JavaScript:
document.addEventListener('DOMContentLoaded', function () {
  const themeToggleBtn = document.getElementById('theme-toggle');
  
  if (themeToggleBtn) {
    themeToggleBtn.addEventListener('click', async function () {
      // Definir temas disponibles
      const themes = {
        light: {
          '--thm-color': '#505050',
          '--thm-black': '#ffffff',
          '--thm-black2': '#ffffff',
          '--thm-special': '#ffffff',
          '--thm-text-dark': '#505050',
        },
        dark: {
          '--thm-color': '#505050',
          '--thm-black': '#2d3e4f',
          '--thm-black2': '#2d3e4f',
          '--thm-special': '#2d3e4f',
          '--thm-text-dark': '#ffffff',
        }
      };

      const currentTheme = localStorage.getItem('preferred-theme') || 'dark';
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

      // Usar la función de transición
      await window.toggleTheme(newTheme, themes[newTheme]);

      // Actualizar icono del botón (opcional)
      const icon = themeToggleBtn.querySelector('i');
      if (icon) {
        icon.classList.toggle('fa-moon');
        icon.classList.toggle('fa-sun');
      }
    });
  }
});


// ========================================
// EJEMPLO 2: Cambiar colores específicos
// ========================================

// Cambiar solo algunos colores con transición suave
// window.changeColorTheme({
//   '--thm-base': '#ff6b6b',
//   '--thm-primary': '#ff8c8c',
//   '--thm-secondary': '#cc5555'
// });


// ========================================
// EJEMPLO 3: Cargar tema guardado al iniciar
// ========================================

// Definir los temas disponibles
const AVAILABLE_THEMES = {
  default: {
    '--thm-color': '#505050',
    '--thm-black': '#2d3e4f',
    '--thm-black2': '#2d3e4f',
    '--thm-special': '#2d3e4f',
    '--thm-text-dark': '#ffffff',
  },
  light: {
    '--thm-color': '#505050',
    '--thm-black': '#ffffff',
    '--thm-black2': '#ffffff',
    '--thm-special': '#ffffff',
    '--thm-text-dark': '#505050',
  },
  dark: {
    '--thm-color': '#505050',
    '--thm-black': '#1a1a1a',
    '--thm-black2': '#1a1a1a',
    '--thm-special': '#1a1a1a',
    '--thm-text-dark': '#ffffff',
  }
};

// Cargar tema al iniciar la página
window.loadSavedTheme(AVAILABLE_THEMES);


// ========================================
// EJEMPLO 4: Menú de selección de temas
// ========================================

// HTML:
// <select id="theme-selector">
//   <option value="default">Tema Predeterminado</option>
//   <option value="light">Tema Claro</option>
//   <option value="dark">Tema Oscuro</option>
// </select>

// JavaScript:
document.addEventListener('DOMContentLoaded', function () {
  const themeSelector = document.getElementById('theme-selector');
  
  if (themeSelector) {
    themeSelector.addEventListener('change', async function () {
      const selectedTheme = this.value;
      
      if (AVAILABLE_THEMES[selectedTheme]) {
        await window.toggleTheme(selectedTheme, AVAILABLE_THEMES[selectedTheme]);
      }
    });

    // Establecer valor actual del selector
    const currentTheme = localStorage.getItem('preferred-theme') || 'default';
    themeSelector.value = currentTheme;
  }
});


// ========================================
// EJEMPLO 5: Cambio automático según hora
// ========================================

// Cambiar automáticamente entre tema claro (día) y oscuro (noche)
function initAutoTheme() {
  const hour = new Date().getHours();
  const isDaytime = hour > 6 && hour < 18;
  const autoTheme = isDaytime ? 'light' : 'dark';

  window.toggleTheme(autoTheme, AVAILABLE_THEMES[autoTheme]);
}

// Descomenta para usar auto-tema
// initAutoTheme();


// ========================================
// EJEMPLO 6: Cambio por preferencia del sistema
// ========================================

// Detectar si el sistema prefiere modo oscuro
function initSystemTheme() {
  if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    window.loadSavedTheme(AVAILABLE_THEMES);
  }
}

// Escuchar cambios en la preferencia del sistema
if (window.matchMedia) {
  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
    const newTheme = e.matches ? 'dark' : 'light';
    window.toggleTheme(newTheme, AVAILABLE_THEMES[newTheme]);
  });
}

// Descomenta para usar preferencia del sistema
// initSystemTheme();

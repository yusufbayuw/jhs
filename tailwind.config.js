import preset from './vendor/filament/support/tailwind.config.preset'
 
export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/solution-forest/filament-tree/resources/**/*.blade.php',
        "./vendor/chrisreedio/socialment/resources/**/*.blade.php",
        './resources/views/livewire/**/*.blade.php',
    ],
}
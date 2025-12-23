# Componenti Chart

## Introduzione
I componenti chart forniscono visualizzazioni grafiche dei dati, utilizzando Chart.js come motore di rendering. Supportano vari tipi di grafici e sono altamente personalizzabili.
<<<<<<< HEAD
## Componenti Disponibili
=======

## Componenti Disponibili

>>>>>>> laraxot/develop
### LineChart
```blade
<x-ui::line-chart 
    :title="'Andamento Utenti'"
    :labels="['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu']"
    :datasets="[
        [
            'label' => 'Nuovi Utenti',
            'data' => [65, 59, 80, 81, 56, 55],
            'borderColor' => '#4CAF50',
            'tension' => 0.1
        ]
    ]"
    :height="300"
    :responsive="true"
    :legend="true"
    :tooltips="true"
/>
```
<<<<<<< HEAD
### PieChart
=======

### PieChart
```blade
>>>>>>> laraxot/develop
<x-ui::pie-chart 
    :title="'Distribuzione Utenti'"
    :labels="['Attivi', 'Inattivi', 'In attesa']"
    :data="[300, 50, 100]"
    :colors="['#4CAF50', '#F44336', '#FFC107']"
<<<<<<< HEAD
### StatsOverview
<x-ui::stats-overview 
    :stats="[
=======
    :height="300"
    :responsive="true"
    :legend="true"
    :tooltips="true"
/>
```

### StatsOverview
```blade
<x-ui::stats-overview 
    :stats="[
        [
>>>>>>> laraxot/develop
            'label' => 'Utenti Totali',
            'value' => 1234,
            'icon' => 'users',
            'trend' => '+12%',
            'trendColor' => 'success'
        ],
<<<<<<< HEAD
=======
        [
>>>>>>> laraxot/develop
            'label' => 'Nuovi Oggi',
            'value' => 45,
            'icon' => 'user-plus',
            'trend' => '+5%',
<<<<<<< HEAD
=======
            'trendColor' => 'success'
        ],
        [
>>>>>>> laraxot/develop
            'label' => 'Conversioni',
            'value' => '78%',
            'icon' => 'chart-line',
            'trend' => '-2%',
            'trendColor' => 'danger'
<<<<<<< HEAD
## Personalizzazione
=======
        ]
    ]"
/>
```

## Personalizzazione

>>>>>>> laraxot/develop
### Tema
- Colori personalizzati
- Stili CSS
- Animazioni
- Tooltip
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### Dati
- Formati supportati
- Aggiornamento in tempo reale
- Filtri
- Trasformazioni
<<<<<<< HEAD
## Integrazione
### Livewire
```php
use Livewire\Component;
=======

## Integrazione

### Livewire
```php
use Livewire\Component;

>>>>>>> laraxot/develop
class UserStats extends Component
{
    public $chartData;
    
    public function mount()
    {
        $this->updateChartData();
    }
<<<<<<< HEAD
    public function updateChartData()
=======
    
    public function updateChartData()
    {
>>>>>>> laraxot/develop
        $this->chartData = [
            'labels' => ['Gen', 'Feb', 'Mar'],
            'datasets' => [
                [
                    'label' => 'Utenti',
                    'data' => User::countByMonth(),
                    'borderColor' => '#4CAF50'
                ]
            ]
        ];
<<<<<<< HEAD
    public function render()
        return view('livewire.user-stats');
}
## Best Practices
=======
    }
    
    public function render()
    {
        return view('livewire.user-stats');
    }
}
```

## Best Practices

>>>>>>> laraxot/develop
### Utilizzo
- Dati significativi
- Leggibilità
- Responsive design
- Accessibilità
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### Performance
- Ottimizzazione dati
- Lazy loading
- Cache risultati
- Aggiornamento efficiente
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
## Collegamenti
- [Componenti Base](./base-components.md)
- [Componenti Form](./form-components.md)
- [Componenti Table](./table-components.md)
- [Componenti Layout](./layout-components.md)
<<<<<<< HEAD
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md) 
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md) 
=======
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md) 
>>>>>>> laraxot/develop

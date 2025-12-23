# Componenti Table

## Introduzione
I componenti table forniscono una gestione efficiente e personalizzabile dei dati tabulari, con funzionalità avanzate di ordinamento, filtro e paginazione.
<<<<<<< HEAD
## Componenti Disponibili
=======

## Componenti Disponibili

>>>>>>> laraxot/develop
### DataTable
```blade
<x-ui::datatable 
    :columns="[
        ['name' => 'id', 'label' => 'ID', 'sortable' => true],
        ['name' => 'name', 'label' => 'Nome', 'sortable' => true],
        ['name' => 'email', 'label' => 'Email', 'sortable' => true],
        ['name' => 'created_at', 'label' => 'Data Creazione', 'sortable' => true],
    ]"
    :data="$users"
    :per-page="10"
    :searchable="true"
    :sortable="true"
    :filterable="true"
    :exportable="true"
/>
```
<<<<<<< HEAD
### StatusBadge
=======

### StatusBadge
```blade
>>>>>>> laraxot/develop
<x-ui::status-badge 
    :status="$user->status"
    :options="[
        'active' => ['label' => 'Attivo', 'color' => 'success'],
        'inactive' => ['label' => 'Inattivo', 'color' => 'danger'],
        'pending' => ['label' => 'In attesa', 'color' => 'warning'],
<<<<<<< HEAD
### ActionButtons
=======
    ]"
/>
```

### ActionButtons
```blade
>>>>>>> laraxot/develop
<x-ui::action-buttons 
    :actions="[
        [
            'type' => 'view',
            'url' => route('users.show', $user),
            'icon' => 'eye',
            'label' => 'Visualizza'
        ],
<<<<<<< HEAD
=======
        [
>>>>>>> laraxot/develop
            'type' => 'edit',
            'url' => route('users.edit', $user),
            'icon' => 'pencil',
            'label' => 'Modifica'
<<<<<<< HEAD
=======
        ],
        [
>>>>>>> laraxot/develop
            'type' => 'delete',
            'url' => route('users.destroy', $user),
            'icon' => 'trash',
            'label' => 'Elimina',
            'confirm' => true
        ]
<<<<<<< HEAD
## Funzionalità
=======
    ]"
/>
```

## Funzionalità

>>>>>>> laraxot/develop
### Ordinamento
- Multi-colonna
- Direzione (asc/desc)
- Personalizzazione
- Cache risultati
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### Filtri
- Testo libero
- Select multipli
- Date range
- Custom filters
<<<<<<< HEAD
### Paginazione
- Server-side
- Client-side
- Cache pagine
## Integrazione
### Livewire
```php
use Livewire\Component;
=======

### Paginazione
- Server-side
- Client-side
- Personalizzazione
- Cache pagine

## Integrazione

### Livewire
```php
use Livewire\Component;

>>>>>>> laraxot/develop
class UserTable extends Component
{
    public $sortField = 'name';
    public $sortDirection = 'asc';
    public $search = '';
    public $perPage = 10;
    
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }
<<<<<<< HEAD
    public function render()
=======
    
    public function render()
    {
>>>>>>> laraxot/develop
        $users = User::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%'.$this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);
            
        return view('livewire.user-table', compact('users'));
<<<<<<< HEAD
}
## Best Practices
### Utilizzo
- Ottimizzazione query
- Lazy loading
- Responsive design
=======
    }
}
```

## Best Practices

### Utilizzo
- Ottimizzazione query
- Cache risultati
- Lazy loading
- Responsive design

>>>>>>> laraxot/develop
### Performance
- Indici database
- Query ottimizzate
- Cache paginazione
- Lazy loading colonne
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
## Collegamenti
- [Componenti Base](./base-components.md)
- [Componenti Form](./form-components.md)
- [Componenti Chart](./chart-components.md)
- [Componenti Layout](./layout-components.md)
<<<<<<< HEAD
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md) 
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md) 
=======
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md) 
>>>>>>> laraxot/develop

# Paróquia Nossa Senhora Mãe dos Homens

Site oficial da **Paróquia Nossa Senhora Mãe dos Homens** — Cuiabá/MT, vinculada à Arquidiocese de Cuiabá. O projeto apresenta a história da paróquia, horários de missas, sacramentos, comunidades, contato e localização.

O repositório contém duas versões do mesmo site:

- **Site estático** (HTML, CSS e JavaScript puro) — na raiz do projeto.
- **Tema WordPress** (`wp-tema-maedoshomens/`) — conversão do site estático para um tema instalável no WordPress.

## 🛠️ Tecnologias

- HTML5 semântico
- CSS3 (layout responsivo, sem frameworks)
- JavaScript puro (vanilla, sem dependências)
- [Google Fonts](https://fonts.google.com/) — Playfair Display e Lato
- [Font Awesome 6.5](https://fontawesome.com/) — ícones
- Google Maps (embed)
- PHP / WordPress (versão tema)

## 📁 Estrutura

```
mae-dos-homens/
├── index.html              # Página principal (versão estática)
├── css/
│   └── style.css           # Estilos do site
├── js/
│   └── main.js             # Menu mobile, slider, scroll suave, fade-in
├── img/                    # Logo e fotos
└── wp-tema-maedoshomens/   # Tema WordPress
    ├── functions.php       # Setup do tema e carregamento de assets
    ├── header.php          # <head>, barra de topo e navbar
    ├── front-page.php      # Conteúdo da home
    ├── footer.php          # Rodapé
    ├── index.php           # Template padrão
    ├── style.css           # Estilos + cabeçalho do tema
    ├── js/
    └── img/
```

## ✨ Funcionalidades

- **Slider/carrossel** no topo (hero) com autoplay, setas e indicadores
- **Menu responsivo** com botão de abrir/fechar no mobile
- **Scroll suave** para âncoras das seções
- **Animação fade-in** das seções ao rolar a página
- Seções: História da Paróquia, Sacramentos, Dízimo, Horários de Missas, Comunidades, Redes Sociais, Mapa e Contato

## 🚀 Como usar

### Versão estática

Basta abrir o arquivo `index.html` no navegador. Por ser HTML/CSS/JS puro, não há build nem dependências a instalar.

Para servir localmente (recomendado, para o mapa e fontes carregarem corretamente):

```bash
# Python
python -m http.server 8000

# Node (npx)
npx serve
```

Depois acesse `http://localhost:8000`.

### Versão WordPress

1. Copie a pasta `wp-tema-maedoshomens/` para `wp-content/themes/` da sua instalação WordPress.
2. No painel administrativo, acesse **Aparência → Temas** e ative o tema **Paróquia Mãe dos Homens**.
3. Em **Configurações → Leitura**, defina uma página estática como página inicial (o template `front-page.php` será usado automaticamente).

**Requisitos:** WordPress 6.0+ e PHP 7.4+.

## 📍 Contato da Paróquia

- **Endereço:** Praça Santos Dumont, 133 — Quilombo, Cuiabá/MT — CEP 78045-230
- **Telefone:** (65) 3057-3708
- **WhatsApp:** (65) 9 9997-2529
- **E-mail:** pnsmaedoshomens@cuiabaarquidiocese.net
- **Instagram:** [@arquidiocesedecuiabamt](https://www.instagram.com/arquidiocesedecuiabamt/)

## 📄 Licença

A versão do tema WordPress está sob licença **GNU GPL v2 ou posterior**. Conteúdo, imagens e marca da paróquia são de uso exclusivo da Paróquia Nossa Senhora Mãe dos Homens.

---

Desenvolvido por **Gabriel**.

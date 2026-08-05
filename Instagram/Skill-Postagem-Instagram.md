# Skill: Postagem Instagram

Padrão fixo de organização para o conteúdo gerado (vídeos, imagens e legendas) que será postado no Instagram do Templo do Churrasco. Esse padrão deve ser sempre respeitado nas automações — elas leem e escrevem os arquivos seguindo exatamente esta estrutura.

## Estrutura de pastas

```
Instagram/
├── Carrossel/
│   ├── nome-do-post.mp4 (ou .jpg/.png/.mp4 — pode ser múltiplos arquivos do mesmo carrossel)
│   └── nome-do-post.txt
├── Feeds/
│   ├── nome-do-post.mp4 (ou .jpg/.png)
│   └── nome-do-post.txt
└── Reels-Stories/
    ├── nome-do-post.mp4
    └── nome-do-post.txt
```

## Regras

1. **Três subpastas fixas** dentro de `Instagram/`: `Carrossel`, `Feeds`, `Reels-Stories`. Nenhuma outra subpasta deve ser criada sem atualizar este documento.
2. **Legenda ao lado da mídia**: cada vídeo/imagem tem um arquivo `.txt` de legenda na mesma subpasta, com **exatamente o mesmo nome base** (sem extensão). Exemplo: `churrasco-domingo.mp4` + `churrasco-domingo.txt`.
3. **Carrossel com múltiplos arquivos**: quando um post de carrossel tiver mais de uma mídia, todas compartilham o mesmo nome base com um sufixo numérico (`nome-do-post-1.mp4`, `nome-do-post-2.mp4`, ...), e uma única legenda `nome-do-post.txt` (sem sufixo) vale para o conjunto.
4. **Nome base livre**, mas deve ser único dentro da subpasta e sem espaços (usar `-` como separador) para facilitar leitura por scripts de automação.
5. **Sempre commitar e dar push** da pasta `Instagram/` para o GitHub após adicionar ou atualizar conteúdo — as automações consomem os arquivos diretamente do repositório remoto.
6. Pastas sem conteúdo ainda mantêm um arquivo `.gitkeep` para o Git rastrear a estrutura vazia; remova o `.gitkeep` de uma subpasta assim que o primeiro arquivo real for adicionado nela.

## Status atual

Estrutura criada e vazia, aguardando os primeiros vídeos/legendas gerados.

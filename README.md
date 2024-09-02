# WooCommerce Order Completion Date Adjuster

**WooCommerce Order Completion Date Adjuster** est un plugin WordPress qui ajuste la date de création des commandes WooCommerce pour qu'elle corresponde à la date à laquelle les commandes sont marquées comme "terminées". Cela permet de suivre les ventes en fonction de la date de leur achèvement plutôt que de la date de leur création.

## Description

Par défaut, WooCommerce enregistre la date de création d'une commande comme date de vente, même si la commande n'est terminée que plusieurs jours plus tard. Ce plugin modifie ce comportement en mettant à jour la date de la commande au moment où elle est marquée comme "terminée". Cela garantit que les ventes sont enregistrées en fonction du jour où elles sont réellement finalisées.

## Fonctionnalités

- Ajuste la date de commande pour qu'elle corresponde à la date de finalisation.
- Utilise le fuseau horaire configuré dans WordPress pour une précision maximale.
- S'intègre parfaitement avec WooCommerce, sans perturber le flux de travail habituel.

## Installation

1. Téléchargez le plugin en tant que fichier `.zip` ou clonez le dépôt depuis GitHub.

2. Accédez à votre tableau de bord WordPress, puis allez dans **Extensions > Ajouter**.

3. Cliquez sur **Téléverser une extension** et sélectionnez le fichier `.zip` du plugin. Ensuite, cliquez sur **Installer maintenant**.

4. Après l'installation, cliquez sur **Activer** pour activer le plugin.

## Utilisation

Le plugin fonctionne automatiquement une fois activé. Il n'y a aucune configuration supplémentaire requise. Chaque fois qu'une commande est marquée comme "terminée" dans WooCommerce, la date de la commande sera mise à jour à la date actuelle.

## Développement

### Dépôt GitHub

Vous pouvez consulter le code source et contribuer au développement du plugin via GitHub :  
[WooCommerce Order Completion Date Adjuster](https://github.com/louisisaacdiouf/woocommerce-order-completion-date-adjuster)

### Contributions

Les contributions sont les bienvenues ! Pour contribuer :

1. Fork le projet
2. Crée une branche pour ta fonctionnalité (`git checkout -b feature/AmazingFeature`)
3. Commit tes changements (`git commit -m 'Add some AmazingFeature'`)
4. Push la branche (`git push origin feature/AmazingFeature`)
5. Ouvre une Pull Request

## Auteurs

- **Louis Isaac Diouf** - Développeur principal - [GitHub](https://github.com/louisisaacdiouf)

## Licence

Ce plugin est distribué sous la licence GPLv2 ou supérieure. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

## Remerciements

Merci à la communauté WordPress et WooCommerce pour leur documentation et leur soutien continu.

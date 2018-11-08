var $data = "";
function Connexion_Admin()
{ 
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/AfficherRegions",
            success:function($data)
            {
		        $data["regions"] = this.getRegions();
            },    
            error:function()
            {
                alert('Erreur: Afficher les regions')
            }
        }
    )  
}
function connexion_Invite()
	{
        $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/AfficherRegions",
            success:function($data)
            {
		        $data["regions"] = this.getRegionInvite();
            },    
            error:function()
            {
                alert('Erreur: Afficher les regions')
            }
        }
    )
}
function AfficherRegions()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/AfficherRegions",
            success:function(data)
            {
                $("#listeRegions").empty();
                $("#AfficherRegions").empty();
                $("#AfficherRegions").append(data);
            },
            error:function()
            {
                alert('Erreur: Afficher les regions')
            }
        }
    )
}
function NoterRegions()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/ListeRegions",
            success:function(data)
            {
                $("#listeRegions").empty();
                $("#listeRegions").append(data);
            },
            error:function()
            {
                alert('Erreur: Récuperation Regions')
            }
        }
    )
}

function AjouterNote()
{
    var tabRegions = Array();
    var tabNoteRegions = Array();
    $('input[type=checkbox]').each
    (
        function()
        {
            tabRegions.push($(this).val());
            tabNoteRegions.push($(this).is(":checked"));
        }
    );
    $.ajax
    (
        {
            url:"index.php/Welcome/AddVote",
            type:'get',
            data:'tab1='+tabRegions+"&tab2="+tabNoteRegions,
            success:function(data)
            {
                alert("Note mise à jour");
                $("#AfficherRegions").empty();
                $("#listeRegions").empty();
                $("#listeRegions").append(data);
            },
            error:function()
            {
                alert("Erreur : Ajout Note");
            }
        }
    );
}
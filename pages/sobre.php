<?php include "config.php"; ?>


  <div class="container">
    <div class="row">
      <div class="col">
        <h6 class="text">
          Destaque-se no mercado de trabalho com o curso técnico em Informática do CIMOL. Nossa formação de alta
          qualidade prepara você para os desafios da indústria de tecnologia. Com um corpo docente experiente e
          atualizado, você receberá o melhor suporte educacional. Nosso foco em tecnologias emergentes garante que você
          adquira habilidades relevantes para o futuro. A abordagem prática permite que você desenvolva soluções
          inovadoras em nossos laboratórios avançados. Nossa infraestrutura moderna cria o ambiente perfeito para seu
          aprendizado. Ao concluir o curso, você estará pronto para uma carreira de sucesso na área de informática.
          Invista no seu futuro e inscreva-se no CIMOL hoje mesmo!
        </h6>
      </div>
    </div>
  </div>

  <div class="container buttons">
    <div class="row">
      <div class="col-4 text-center">
        <img src="<?php echo URL ?>img/2.png" id="grade" />
      </div>
      <div class="col-4 text-center">
        <img src="<?php echo URL ?>img/3.png" id="profs" />
      </div>
      <div class="col-4 text-center">
        <img src="<?php echo URL ?>img/4.png" id="estagio" />
      </div>
    </div>
  </div>

  <div class="main">

  </div>

  <script>
    document.querySelector("#profs").onclick = () => {
    let main = document.querySelector(".main")
    main.innerHTML = ""

    let container = document.createElement("div")
    container.setAttribute("class", "container grade text-center")
    let row = document.createElement("div")
    row.setAttribute("class", "row")
    main.append(container)
    container.append(row)

    let lista = {
        1: {
            "foto": "<?php echo URL ?>img/Candido.jpeg",
            "nome": "Candido Luciano de Farias",
            "profissao": "Professor e Cordenador do curso",
            "disciplina": "Criação de Sites & Projeto de Pesquisa"
        },
        2: {
            "foto": "<?php echo URL ?>img/Diego.jpeg",
            "nome": "Diego Candido de Souza",
            "profissao": "Professor",
            "disciplina": "Design Grafíco"
        },
        3: {
            "foto": "<?php echo URL ?>img/Jeferson.jpeg",
            "nome": "Jeferson William Gomes de Vargas",
            "profissao": "Professor",
            "disciplina": "Criação de Sites"
        },
        4: {
            "foto": "<?php echo URL ?>img/Thiago.jpeg",
            "nome": "Tiago Ulrich Beneditto",
            "profissao": "Professor",
            "disciplina": "Programação"
        },
        5: {
            "foto": "<?php echo URL ?>img/Rodrigo.jpg",
            "nome": "Rodrigo Henrich",
            "profissao": "Professor",
            "disciplina": "Programação"
        },
        6: {
            "foto": "<?php echo URL ?>img/Helder.jpg",
            "nome": "Helder Palharini de Mattos",
            "profissao": "Professor",
            "disciplina": "Manutenção & Sistemas Operacionais"
        },
        7: {
            "foto": "<?php echo URL ?>img/Erai.jpeg",
            "nome": "Erai de Souza Junior",
            "profissao": "Professor",
            "disciplina": "Redes de Computadoes"
        },
        8: {
            "foto": "<?php echo URL ?>img/Janaina.jpeg",
            "nome": "Janaina de Oliveira dos Santos",
            "profissao": "Professora",
            "disciplina": "Modelagem e Projeto de Banco de Dados"
        },
        9: {
            "foto": "<?php echo URL ?>img/Elisiane.jpg",
            "nome": "Elisiane Correa da Silva Pereira",
            "profissao": "Professora",
            "disciplina": "Projeto de Pesquisa"
        },
        10: {
            "foto": "<?php echo URL ?>img/semFoto.jpeg",
            "nome": "Simone Cristina",
            "profissao": "Professora",
            "disciplina": "Projeto de Pesquisa"
        },
        11: {
            "foto": "<?php echo URL ?>img/Ricardo.jpeg",
            "nome": "Ricardo Vinicius Kaspper",
            "profissao": "Professor",
            "disciplina": "Programação"
        },
        12: {
            "foto": "<?php echo URL ?>img/Isis.jpeg",
            "nome": "Isis Cadine da Silva",
            "profissao": "Professora",
            "disciplina": "Empreendedorismo"
        },
        13: {
            "foto": "<?php echo URL ?>img/semFoto.jpeg",
            "nome": "Luis Evaldo Lopes Dias",
            "profissao": "Professor",
            "disciplina": "Ética"
        },
    }

    for (let i = 1; i <= 13; i++) {
        let col = document.createElement("div")
        col.setAttribute("class", "col text-center")
        let img = document.createElement("img")
        img.setAttribute("src", lista[i].foto)
        let nome = document.createElement("h5")
        nome.innerHTML = lista[i].nome
        let profissao = document.createElement("p")
        profissao.setAttribute("class", "info")
        profissao.innerHTML = lista[i].profissao
        let disciplina = document.createElement('p')
        disciplina.setAttribute("class", "info")
        disciplina.innerHTML = lista[i].disciplina

        col.append(img)
        col.append(nome)
        col.append(profissao)
        col.append(disciplina)
        row.append(col)
    }
}

document.querySelector("#grade").onclick = () => {
    let main = document.querySelector(".main")
    main.innerHTML = ""

    let grade = {
        1: {
            "disciplina": "Modelagaem e Projeto de Banco de Dados",
            "ano1": "-",
            "ano2": "-",
            "ano3": "4",
            "ha": "160",
            "hr": "134h"
        },
        2: {
            "disciplina": "Criação de Sites",
            "ano1": "-",
            "ano2": "3",
            "ano3": "3",
            "ha": "240",
            "hr": "200h"
        },
        3: {
            "disciplina": "Design Grafico",
            "ano1": "-",
            "ano2": "2",
            "ano3": "3",
            "ha": "200",
            "hr": "166h"
        },
        4: {
            "disciplina": "Mauntenção de Microcomputadores",
            "ano1": "-",
            "ano2": "2",
            "ano3": "-",
            "ha": "80",
            "hr": "67h"
        },
        5: {
            "disciplina": "Programação",
            "ano1": "-",
            "ano2": "4",
            "ano3": "4",
            "ha": "230",
            "hr": "266h"
        },
        6: {
            "disciplina": "Redes de Computadores",
            "ano1": "-",
            "ano2": "-",
            "ano3": "2",
            "ha": "80",
            "hr": "67h"
        },
        7: {
            "disciplina": "Sistemas Operacionais",
            "ano1": "-",
            "ano2": "3",
            "ano3": "-",
            "ha": "120",
            "hr": "100h"
        },
        8: {
            "disciplina": "Ética",
            "ano1": "-",
            "ano2": "1",
            "ano3": "-",
            "ha": "40",
            "hr": "33h"
        },
        9: {
            "disciplina": "Empreendedorismo",
            "ano1": "-",
            "ano2": "-",
            "ano3": "1",
            "ha": "40",
            "hr": "33h"
        },
        10: {
            "disciplina": "Projeto de Pesquisa",
            "ano1": "2",
            "ano2": "2",
            "ano3": "2",
            "ha": "240",
            "hr": "200h"
        }
    }

    let table = document.createElement("table")
    let container = document.createElement("div")
    container.setAttribute("class", "container table-responsive")
    table.setAttribute("class", "table table-success table-striped")
    container.append(table)
    main.append(container)
    let tr = document.createElement("tr")3
    let thead = document.createElement("thead")
    let tbody = document.createElement("tbody")

    let th1 = document.createElement("th")
    th1.innerHTML = "Disciplinas"
    let th2 = document.createElement("th")
    th2.setAttribute("class", "center")
    th2.innerHTML = "Periodos Semanais 1º ano"
    let th3 = document.createElement("th")
    th3.setAttribute("class", "center")
    th3.innerHTML = "Periodos Semanais 2º ano"
    let th4 = document.createElement("th")
    th4.setAttribute("class", "center")
    th4.innerHTML = "Periodos Semanais 3º ano"
    let th5 = document.createElement("th")
    th5.setAttribute("class", "center")
    th5.innerHTML = "CH h/a"
    let th6 = document.createElement("th")
    th6.setAttribute("class", "center")
    th6.innerHTML = "CH h/r"

    tr.append(th1)
    tr.append(th2)
    tr.append(th3)
    tr.append(th4)
    tr.append(th5)
    tr.append(th6)
    thead.append(tr)
    table.append(thead)

    for (let i = 1; i <= 10; i++) {
        let tr = document.createElement("tr")

        let td1 = document.createElement("td")
        td1.append(grade[i].disciplina)
        let td2 = document.createElement("td")
        td2.setAttribute("class", "center")
        td2.append(grade[i].ano1)
        let td3 = document.createElement("td")
        td3.setAttribute("class", "center")
        td3.append(grade[i].ano2)
        let td4 = document.createElement("td")
        td4.setAttribute("class", "center")
        td4.append(grade[i].ano3)
        let td5 = document.createElement("td")
        td5.setAttribute("class", "center")
        td5.append(grade[i].ha)
        let td6 = document.createElement("td")
        td6.setAttribute("class", "center")
        td6.append(grade[i].hr)

        tr.append(td1)
        tr.append(td2)
        tr.append(td3)
        tr.append(td4)
        tr.append(td5)
        tr.append(td6)
        tbody.append(tr)
        table.append(tbody)
    }

    console.log(grade);
}

document.querySelector("#estagio").onclick = () => {
    let main = document.querySelector(".main")
    main.innerHTML = ""
    let container = document.createElement("div")
    container.setAttribute("class", "container")
    let row = document.createElement("row")
    row.setAttribute("class", "row")

    let col = document.createElement("div")
    col.setAttribute("class", "col")

    let h6 = document.createElement("h6")
    h6.setAttribute("class", "text")
    h6.innerHTML = "É obrigatório a realização de um estágio de 400 horas ao final do curso. Essa etapa é de extrema importância, pois permite aos estudantes colocar em prática os conhecimentos adquiridos em sala de aula e vivenciar a realidade do mercado de trabalho. \n \nO estágio proporciona uma experiência valiosa, permitindo que os alunos apliquem suas habilidades em um ambiente profissional, desenvolvam competências específicas da área e construam um network relevante.Além disso, muitos alunos têm a oportunidade de mostrar seu potencial e conquistar uma vaga de emprego na empresa em que realizaram o estágio. \n \nO CIMOL possui parcerias com empresas renomadas, o que facilita a colocação dos estudantes em estágios de qualidade e aumenta as chances de serem contratados posteriormente.Dessa forma, o estágio obrigatório se torna um importante passo na transição para o mercado de trabalho, proporcionando aos alunos uma trajetória de sucesso e uma maior empregabilidade após a conclusão do curso."

    main.append(container)
    container.append(row)
    row.append(col)
    col.append(h6)

}
  </script>



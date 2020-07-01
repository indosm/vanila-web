# vanila-web

How to use : 
docker-compose up

<added : Kubernetes>
사용법 - kuber폴더 내의 deployment.yaml과 service.yaml을 각각 kubectl을 통해 생성.
deployment는 docker hub내의 indosm/entry image를 가져와서 pod 생성.
상기의 이미지는 www.aaa.com으로 redirect해주는 index.html페이지.

service는 my-entry라는 이름으로 만들어진 deployment를 외부로 노출시켜줌.
kubectl get services를 통해서 <external IP>를 확인한 후, <IP>:<port>를 통해 해당 pod에 접속 가능.
